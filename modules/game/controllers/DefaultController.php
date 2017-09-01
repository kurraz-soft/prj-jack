<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\controllers;


use app\components\Controller;
use app\modules\game\models\GameMechanics;
use app\modules\game\models\libraries\MastersLibrary;

class DefaultController extends Controller
{
    public $layout = 'empty';

    public function actionIndex($new = null)
    {
        if($new != null)
        {
            return $this->redirect(['character-select','n' => $new]);
        }

        return $this->redirect(['home/index']);
    }

    /**
     * @param int $n - save_game slot number
     * @param string $id - selected character type id
     * @return string
     */
    public function actionCharacterSelect($n, $id = null)
    {
        if($id)
        {
            GameMechanics::getInstance()->newGame($n, $id);
            GameMechanics::getInstance()->saveGame();

            return $this->redirect(['home/index']);
        }

        $characters = MastersLibrary::loadData();

        return $this->render('character-select',[
            'characters' => $characters,
        ]);
    }
}
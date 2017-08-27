<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\controllers;


use app\components\Controller;
use app\modules\game\assets\AppAsset;
use app\modules\game\models\GameMechanics;

abstract class GameController extends Controller
{
    public $asset;

    public function init()
    {
        $this->on(Controller::EVENT_BEFORE_ACTION, function () {
            $this->asset = AppAsset::register($this->view);

            GameMechanics::getInstance()->loadGame();

        });

        parent::init();
    }
}
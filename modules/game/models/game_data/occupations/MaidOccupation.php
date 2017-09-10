<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class MaidOccupation implements IOccupation
{
    public function getId()
    {
        return 'maid';
    }

    public function getName()
    {
        return 'горничная';
    }

    public function getDescriptions()
    {
        return [
            'Став постарше, я устроилась работать служанкой в один очень богатый дом. Там было много слуг, садовник, шофер, шеф-повар. Всем хозяйством заведовал старый опытный дворецкий. Он был добр ко мне, и я многому смогла научиться у него.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
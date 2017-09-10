<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class FarmerOccupation implements IOccupation
{
    public function getId()
    {
        return 'farmer';
    }

    public function getName()
    {
        return 'сборщица хлопка';
    }

    public function getDescriptions()
    {
        return [
            'Когда я выросла достаточно взрослой, чтобы работать, то стала трудиться на хлопковой плантации. Работа непростая, особенно в жару, но зато неплохо оплачивалась. Машиной то хлопок не соберешь, нужны женские руки.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class SufragistOccupation implements IOccupation
{
    public function getId()
    {
        return 'sufragist';
    }

    public function getName()
    {
        return 'суражистка';
    }

    public function getDescriptions()
    {
        return [
            'Женщины у нас давно уже работают на заводах наравне с мужчинами, но при этом правительство не желает давать нам равных прав. Где справедливость? Я решила посвятить свою жизнь борьбе за права женщин и многого успела добиться. Мы собирали многотысячные митинги!',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
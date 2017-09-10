<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class MechOccupation implements IOccupation
{
    public function getId()
    {
        return 'mech';
    }

    public function getName()
    {
        return 'пилот гигантского человекоподобного боевого робота';
    }

    public function getDescriptions()
    {
        return [
            'Рефлексы у меня всегда были отменные, хотелось настоящих приключений и адреналина. Поэтому я поступила в военное училище на специализацию пилотов боевых роботов. Конечно, работа опасная но интересная. Впрочем, до настоящих сражений я так и не добралась.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
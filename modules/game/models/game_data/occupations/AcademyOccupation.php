<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class AcademyOccupation implements IOccupation
{
    public function getId()
    {
        return 'academy';
    }

    public function getName()
    {
        return 'выпускница академии звездного флота';
    }

    public function getDescriptions()
    {
        return [
            'Когда я подросла, то решила связать свою судьбу с космосом и поступила в академию звездного флота. Обучение было очень дотошным и многосторонним. Астронавигация, нуль-гравитационная логистика, тактика космического боя, физика гиперпространства, - это только некоторые из дисциплин которые я изучала в академии.',
        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
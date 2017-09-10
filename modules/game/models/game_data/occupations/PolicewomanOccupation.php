<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class PolicewomanOccupation implements IOccupation
{
    public function getId()
    {
        return 'policewoman';
    }

    public function getName()
    {
        return 'работница полиции';
    }

    public function getDescriptions()
    {
        return [
            'Преступность у нас - весьма серьезная проблема. Конечно, в полицию идет больше мужчин, но женщины тоже есть. Я не хотела сидеть сложа руки. Поступила в полицейскую академию, чтобы служить обществу и защищать простых граждан.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class HuntressOccupation implements IOccupation
{
    public function getId()
    {
        return 'huntress';
    }

    public function getName()
    {
        return 'охотница';
    }

    public function getDescriptions()
    {
        return [
            'Дикие леса стали моим домом &#45; я знала там каждое дерево, каждый листочек, каждую травинку. Я охотилась на любую добычу, будь то куропатка, кабан или лось. Многие мужчины хотели взять меня в жены, но я отказала всем. Что они могли дать мне?',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
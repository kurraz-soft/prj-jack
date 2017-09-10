<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class TimePliceOccupation implements IOccupation
{
    public function getId()
    {
        return 'time_plice';
    }

    public function getName()
    {
        return 'работница полиции времени';
    }

    public function getDescriptions()
    {
        return [
            'У нас есть технологии, позволяющие в определенных пределах путешествовать во времени. Но это строжайше запрещено. Конечно, преступные элементы пытаются воспользоваться этой возможностью, чтобы атаковать общество из глубины прошлого. Я поступила в полицию времени, чтобы бороться с ними.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
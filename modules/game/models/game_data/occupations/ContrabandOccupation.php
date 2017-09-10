<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class ContrabandOccupation implements IOccupation
{
    public function getId()
    {
        return 'contraband';
    }

    public function getName()
    {
        return 'контрабандистка';
    }

    public function getDescriptions()
    {
        return [
            'Благодаря счастливому случаю мне удалось заполучить в свое распоряжение небольшой, но очень юркий кораблик. Глупо было упускать такой шанс, и я начала перевозить незаконные грузы между отдаленными планетарными системами. Полиция доставляла изрядные проблемы, но зато деньги удавалось делать приличные.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class KaratekaOccupation implements IOccupation
{
    public function getId()
    {
        return 'karateka';
    }

    public function getName()
    {
        return 'кикбоксерша';
    }

    public function getDescriptions()
    {
        return [
            'Вообще-то, у нас считается, что девочка не должна драться. Но что они понимают? Я с детства занималась кикбоксингом и брала призы на юношеских соревнованиях. Но в большом спорте есть свои препятствия, так что в итоге я дралась в полуподпольной лиге женского бокса. Развлечение для мужиков, а не спорт.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
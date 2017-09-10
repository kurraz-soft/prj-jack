<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class HymnastOccupation implements IOccupation
{
    public function getId()
    {
        return 'hymnast';
    }

    public function getName()
    {
        return 'гимнастка';
    }

    public function getDescriptions()
    {
        return [
            'Художественная гимнастика - это спорт для очень молодых. Я была неплохой гимнасткой, хотя так и не успела взять престижных наград. А когда выросла, оказалось, что уже не гожусь для соревнований. Чтобы продолжить карьеру в спорте, я решила стать тренером.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
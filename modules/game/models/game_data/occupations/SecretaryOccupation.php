<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class SecretaryOccupation implements IOccupation
{
    public function getId()
    {
        return 'secretary';
    }

    public function getName()
    {
        return 'секретарша';
    }

    public function getDescriptions()
    {
        return [
            'Когда я повзрослела, то пошла работать секретаршей в одну небольшую контору. Благодаря этой работе я смогла снять себе квартиру и... да в общем все. Денег, конечно, не хватало, но я планировала продолжить карьеру и получить должность получше. Не успела...',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class WeaverOccupation implements IOccupation
{
    public function getId()
    {
        return 'weaver';
    }

    public function getName()
    {
        return 'ткачиха';
    }

    public function getDescriptions()
    {
        return [
            'Со временем мне удалось устроиться на ткацкую фабрику. Работа тяжелая, по двенадцать часов в день, да и платили не много, но все же это работа. У нас в цеху работало двести человек в две смены без остановки. Времени на глупости не было.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
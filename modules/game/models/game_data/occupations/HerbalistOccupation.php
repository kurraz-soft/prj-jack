<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class HerbalistOccupation implements IOccupation
{
    public function getId()
    {
        return 'herbalist';
    }

    public function getName()
    {
        return 'травница';
    }

    public function getDescriptions()
    {
        return [
            'Я с детства умела узнавать, собирать и сушить всякие целебные травы. Иногда люди приходили даже из больших городов, чтобы добыть у меня нужный сбор или отвар. Я много бродила по лесам, лугам и холмам и любила одиночество. Люди плохо понимали и сторонились меня.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
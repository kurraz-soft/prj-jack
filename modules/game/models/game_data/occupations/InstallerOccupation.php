<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class InstallerOccupation implements IOccupation
{
    public function getId()
    {
        return 'installer';
    }

    public function getName()
    {
        return 'орбитальная монтажница';
    }

    public function getDescriptions()
    {
        return [
            'Карьерные перспективы у меня были не слишком радужные. Я решила поступить в службу космического монтажа, так как всегда любила техническую работу. Окончила курсы нуль-гравитационной сварки и работы в тяжелом экзоскелете.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class StudentOccupation implements IOccupation
{
    public function getId()
    {
        return 'student';
    }

    public function getName()
    {
        return 'студентка';
    }

    public function getDescriptions()
    {
        return [
            'Мне удалось попасть в один очень престижный ВУЗ. Правда только со второго раза, конкурс был очень большой. Но я постаралась и все-таки пробилась. Училась только на отлично, шла на красный диплом. Хотя это стоило изрядных нервов...',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
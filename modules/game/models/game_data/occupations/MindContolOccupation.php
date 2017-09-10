<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class MindContolOccupation implements IOccupation
{
    public function getId()
    {
        return 'mind_contol';
    }

    public function getName()
    {
        return 'работница полиции мысли';
    }

    public function getDescriptions()
    {
        return [
            'Удержать человека от обычного преступления несложно. Но люди совершают и мыслепреступления. Поддаваясь пороку, сомневаясь в мудрости Вождя, задумываясь о запретном - враги народа подрывают устои нашего свободного общества в самом его сердце. Я поступила в полицию мысли чтобы бороться с мыслепреступниками.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
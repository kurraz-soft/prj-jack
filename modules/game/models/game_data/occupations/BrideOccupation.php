<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class BrideOccupation implements IOccupation
{
    public function getId()
    {
        return 'bride';
    }

    public function getName()
    {
        return 'девственница';
    }

    public function getDescriptions()
    {
        return [
            'Родители очень хотели подобрать мне хорошего мужа. Приданое у меня было не очень большое, поэтому трудно было сосватать богатого жениха. И мне все они не нравились. Был парень, с которым мы целовались под луной, но родители не хотели меня за него отдавать. А потом я попала в Туманы.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
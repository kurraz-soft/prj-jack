<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class PoorBrideOccupation implements IOccupation
{
    public function getId()
    {
        return 'poor_bride';
    }

    public function getName()
    {
        return 'простолюдинка';
    }

    public function getDescriptions()
    {
        return [
            'Отец уже собрал мне кое-какое приданое и выбирал жениха. Был один который мне особенно глянулся. Не наткнись я на Туман, когда собирала грибы, был бы он сейчас мне уже мужем. Детишек бы завели...',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
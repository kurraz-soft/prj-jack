<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class PoorWifeOccupation implements IOccupation
{
    public function getId()
    {
        return 'poor_wife';
    }

    public function getName()
    {
        return 'жена простолюдина';
    }

    public function getDescriptions()
    {
        return [
            'Когда я вошла в возраст, отец собрал мне кое-какое приданое и выдал замуж. Не сказать, чтобы муженек мой был таким уж подарком, но я была всегда ему верна. Вся работа по дому на мне лежала. Свекровь, правда, вечно душу мотала, а вот муж любил. Все как у людей.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
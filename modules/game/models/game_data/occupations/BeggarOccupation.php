<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class BeggarOccupation implements IOccupation
{
    public function getId()
    {
        return 'beggar';
    }

    public function getName()
    {
        return 'нищенка';
    }

    public function getDescriptions()
    {
        return [
            'К тому времени, когда я подросла, единственным способом прокормиться, не воруя и не продавая своё тело, было просить милостыню. Подавали мне не охотно, так что жила всегда впроголодь. К тому же, стражи порядка и местные бандиты требовали свою долю. Не знаю, сколько бы я еще протянула.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
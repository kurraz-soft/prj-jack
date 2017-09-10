<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class BrothelOccupation implements IOccupation
{
    public function getId()
    {
        return 'brothel';
    }

    public function getName()
    {
        return 'шлюха из борделяe';
    }

    public function getDescriptions()
    {
        return [
            'Когда подросла, я устроилась работать в самый знаменитый городской бордель, и считаю, что мне повезло. Работать на улице я бы вряд ли смогла. А так тепло и безопасно, хотя доля, конечно, не большая. Но бандерша помимо денег заботилась о нашем пропитании и размещении, так что грех жаловаться.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
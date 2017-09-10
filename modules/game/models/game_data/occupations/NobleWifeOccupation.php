<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class NobleWifeOccupation implements IOccupation
{
    public function getId()
    {
        return 'noble_wife';
    }

    public function getName()
    {
        return 'жена лорда';
    }

    public function getDescriptions()
    {
        return [
            'Учитывая мое положение и приданое, отбоя от женихов не было. Можно было повыбирать, но в девках долго сидеть не хотелось, так что замуж я вышла в восемнадцать. Муж мой был постарше меня и много времени проводил в военных походах, а мне оставалось приглядывать за замком да ждать его.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
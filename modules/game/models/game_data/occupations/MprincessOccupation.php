<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class MprincessOccupation implements IOccupation
{
    public function getId()
    {
        return 'mprincess';
    }

    public function getName()
    {
        return 'благородная принцесса';
    }

    public function getDescriptions()
    {
        return [
            'Отец очень сильно хотел выдать меня замуж за какого-нибудь иноземного владыку, но все они были такие противные... Я условие поставила: три загадки жених должен разгадать. Только ни у кого не получалось, а раз так, то от ворот поворот! Хорошо, что папа не стал меня неволить.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
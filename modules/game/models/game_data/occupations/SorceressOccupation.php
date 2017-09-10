<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class SorceressOccupation implements IOccupation
{
    public function getId()
    {
        return 'sorceress';
    }

    public function getName()
    {
        return 'ученица чародейки';
    }

    public function getDescriptions()
    {
        return [
            'Мне повезло устроиться ученицей к известной чародейке, которая обучала меня премудростям своего мастерства. Взамен она требовала выполнять для неё всю черную работу по дому и беспрекословно подчиняться, но я была готова на это ради той власти, что сулит магия.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
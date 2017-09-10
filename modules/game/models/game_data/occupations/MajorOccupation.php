<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class MajorOccupation implements IOccupation
{
    public function getId()
    {
        return 'major';
    }

    public function getName()
    {
        return 'представительница золотой молодежи';
    }

    public function getDescriptions()
    {
        return [
            'Когда я выросла то, конечно, девчачьи интересы сменились на взрослые. Боже, как мы зажигали в клубах! Я была звездой на любой тусовке. А ночные заезды? Мы разбивали в хлам такие тачки, на которые обычному нищеброду не накопить и за всю жизнь. Да, было весело...',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
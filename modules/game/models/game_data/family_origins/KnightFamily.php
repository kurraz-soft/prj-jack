<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class KnightFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'valetry';
    }

    public function getName()
    {
        return 'Дочь поместного феодала';
    }

    public function getNameAuc()
    {
        return 'дочь поместного феодала';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_sensitivity' => 1,
            'seed_pride' => 1,
            'seed_ego' => 1,
            'seed_spoil' => 1,
        ]);
    }
}
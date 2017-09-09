<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class BondmanFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'bondman';
    }

    public function getName()
    {
        return 'Крепостные крестьяне';
    }

    public function getNameAuc()
    {
        return 'дочь крепостных крестьян';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_temper' => -1,
            'seed_ego' => -1,
            'seed_sensitivity' => -2,
            'seed_custom' => 1,
            'seed_intellect' => -1,
        ]);
    }
}
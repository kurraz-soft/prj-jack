<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class PeasantFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'peasant';
    }

    public function getName()
    {
        return 'Крестьяне';
    }

    public function getNameAuc()
    {
        return 'дочь крестьянина';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_stamina' => 1,
            'seed_temper' => -1,
            'seed_ego' => -1,
            'seed_sensitivity' => -2,
            'seed_custom' => 1,
            'seed_intellect' => -1,
        ]);
    }
}
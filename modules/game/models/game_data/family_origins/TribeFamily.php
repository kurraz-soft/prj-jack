<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class TribeFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'tribe';
    }

    public function getName()
    {
        return 'Племя дикарей';
    }

    public function getNameAuc()
    {
        return 'выросшая в племени дикарей';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_stamina' => 1,
        ]);
    }
}
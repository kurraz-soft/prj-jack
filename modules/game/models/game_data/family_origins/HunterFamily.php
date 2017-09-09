<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class HunterFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'hunter';
    }

    public function getName()
    {
        return 'Охотники';
    }

    public function getNameAuc()
    {
        return 'дочь охотника';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_stamina' => 1,
            'seed_temper' => 1,
        ]);
    }
}
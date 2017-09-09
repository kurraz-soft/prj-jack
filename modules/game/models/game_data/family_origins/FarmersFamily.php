<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class FarmersFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'farmers';
    }

    public function getName()
    {
        return 'Фермеры';
    }

    public function getNameAuc()
    {
        return 'фермерская дочка';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_stamina' => 1,
            'seed_intellect' => -1,
            'seed_pride' => -1,
            'seed_custom' => 1,
        ]);
    }
}
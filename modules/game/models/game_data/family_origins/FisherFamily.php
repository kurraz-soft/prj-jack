<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class FisherFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'fisher';
    }

    public function getName()
    {
        return 'Рыбаки';
    }

    public function getNameAuc()
    {
        return 'дочь рыбака';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_temper' => -1,
            'seed_custom' => 1,
        ]);
    }

    public function getDescriptions()
    {
        return [
            '  Мой отец и брат рыбачили в море. У отца была крепкая лодка и большая сеть. Если рыбы было много, то мы меняли её на базаре на всякие нужные вещи. Я помогала папе чинить сеть, хотя пальцы от этого очень сильно болели. Еще у меня была маленькая сестра, но она утонула в море.'
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'bride',
            'viking_wife',
            'witch',
        ];
    }
}
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

    public function getDescriptions()
    {
        return [
            '  Мой отец был охотником, а свою маму я не помню &#45; она умерла, когда я была совсем маленькой. Папа часто приносил домой кроликов и куропаток, но иногда это был олень, кабан или даже медведь. Шкуры и часть мяса он менял в деревне на нужные вещи, поэтому мы жили хорошо.'
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'bride',
            'viking_wife',
            'heroine',
            'witch',
            'herbalist',
        ];
    }
}
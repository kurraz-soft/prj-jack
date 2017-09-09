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

    public function getDescriptions()
    {
        return [
            '  Мои родители были обычными крестьянами. Отец вспахивал поле большим плугом, в который впрягал вола, а мать пряла пряжу и готовила еду. Я помогала нянчить младших детей и носила отцу и братьям обед в поле. Зимой я собирала хворост в лесу и играла с подружками в снежки.'
        ];
    }
}
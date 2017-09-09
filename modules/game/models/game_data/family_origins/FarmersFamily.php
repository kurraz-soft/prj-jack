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

    public function getDescriptions()
    {
        return [
            'Моя семья держала ферму примерно в двадцать акров. Мы растили кукурузу, бобы и имели приличное стадо коров. Я с самого детства помогала родителям по хозяйству, а в свободное время играла с соседскими детьми в ближнем лесу.'
        ];
    }
}
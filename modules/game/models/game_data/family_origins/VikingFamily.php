<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class VikingFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'viking';
    }

    public function getName()
    {
        return 'Морские разбойники';
    }

    public function getNameAuc()
    {
        return 'дочь морского разбойника';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_temper' => 1,
            'seed_pride' => 1,
            'seed_intellect' => -1,
            'seed_sensitivity' => -1,
        ]);
    }

    public function getDescriptions()
    {
        return [
            '  Мой отец был отважным и могучим воином. Он каждый год ходил в поход за море, и ярл всегда ставил его у руля самого большого драккара. Корабли привозили домой много золота и всяких интересных вещей. А я пасла овец на холмах и помогала маме делать пряжу из их шерсти.'
        ];
    }
}
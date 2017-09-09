<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class MedievalWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::MEDIEVAL;
    }

    public function getName()
    {
        return 'Традиционно-аграрный';
    }

    public function getNameAuc()
    {
        return 'традиционно-аграрного мира';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_temper' => $data['seed_temper'] < 5 ? $data['seed_temper'] - 1 : $data['seed_temper'],
            'seed_ego' => -1,
            'seed_intellect' => -1,
            'seed_custom' => 1,
        ]);
    }

    public function getNameBase()
    {
        return 'medieval';
    }
}
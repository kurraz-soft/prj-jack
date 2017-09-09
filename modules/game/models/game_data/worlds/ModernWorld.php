<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class ModernWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::MODERN;
    }

    public function getName()
    {
        return 'Экономически развитый';
    }

    public function getNameAuc()
    {
        return 'экономически развитого мира';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_ego' => 1,
            'seed_pride' => 1,
            'seed_intellect' => 1,
            'seed_stamina' => -1,
        ]);
    }

    public function getNameBase()
    {
        return mt_rand(1,2) == 1 ? 'russian' : 'euro';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class DarkFantasyWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::DARKFANTASY;
    }

    public function getName()
    {
        return 'Темной магии';
    }

    public function getNameAuc()
    {
        return 'мира темной магии';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_stamina' => -1,
            'seed_temper' => -1,
            'seed_ego' => -1,
            'seed_sensitivity' => -1,
            'seed_intellect' => -1,
            'seed_pride' => -1,
            'seed_exotic' => RandomHelper::randFloat(1,4),
            'seed_custom' => 2,
        ]);
    }

    public function getNameBase()
    {
        return mt_rand(1,2) == 1 ? 'medieval' : 'barbarian';
    }
}
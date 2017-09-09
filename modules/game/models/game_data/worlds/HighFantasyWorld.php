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

class HighFantasyWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::HIGHFANTASY;
    }

    public function getName()
    {
        return 'Магический';
    }

    public function getNameAuc()
    {
        return 'магического мира';
    }

    public function affectJsonData($data)
    {

        return ArrayHelper::sumArrays($data,[
            'seed_sensitivity' => 1,
            'seed_exotic' => RandomHelper::randFloat(1,3),
        ]);
    }

    public function getNameBase()
    {
        return mt_rand(1,2) == 1 ? 'medieval' : 'fantasy';
    }
}
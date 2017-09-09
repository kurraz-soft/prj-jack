<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class IndustrialWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::INDUSTRIAL;
    }

    public function getName()
    {
        return 'Индустриально развитый';
    }

    public function getNameAuc()
    {
        return 'индустриально развитого мира';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_custom' => 1,
        ]);
    }

    public function getNameBase()
    {
        return mt_rand(1,2) == 1 ? 'oldschool' : 'euro';
    }
}
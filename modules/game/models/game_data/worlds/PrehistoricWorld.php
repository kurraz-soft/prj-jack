<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class PrehistoricWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::PREHISTORIC;
    }

    public function getName()
    {
        return 'Доисторический';
    }

    public function getNameAuc()
    {
        return 'доисторического мира';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_exotic' => mt_rand(1,2),
            'seed_temper' => 1,
            'seed_ego' => -1,
            'seed_intellect' => -1,
        ]);
    }

    public function getNameBase()
    {
        return 'prehistoric';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class BarbarianWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::BARBARIAN;
    }

    public function getName()
    {
        return 'Варварский';
    }

    public function getNameAuc()
    {
        return 'варварского мира';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_stamina' => 1,
            'seed_temper' => 1,
            'seed_ego' => -1,
            'seed_intellect' => -1,
        ]);
    }

    public function getNameBase()
    {
        return 'barbarian';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class DarkFutureWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::DARKFUTURE;
    }

    public function getName()
    {
        return 'Тоталитарный';
    }

    public function getNameAuc()
    {
        return 'тоталитарной страны';
    }

    public function affectJsonData($data)
    {
        $data['seed_pride'] = 1;
        $data['seed_fat'] = 1;
        return ArrayHelper::sumArrays($data,[
            'seed_stamina' => -1,
            'seed_temper' => -3,
            'seed_intellect' => 1,
            'seed_custom' => 2,
            'seed_ego' => -2,
            'seed_sensitivity' => -1,
        ]);
    }

    public function getNameBase()
    {
        return 'euro';
    }
}
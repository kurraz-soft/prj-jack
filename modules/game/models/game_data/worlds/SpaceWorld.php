<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class SpaceWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::SPACE;
    }

    public function getName()
    {
        return 'Высокоразвитая космическая цивилизация';
    }

    public function getNameAuc()
    {
        return 'высокоразвитой космической цивилизации';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_stamina' => -1,
            'seed_intellect' => 1,
            'seed_exotic' => mt_rand(0.5, 3.5),
            'seed_ego' => 1,
            'seed_pride' => 1,
        ]);
    }

    public function getNameBase()
    {
        return mt_rand(1,2) == 1 ? 'utopia' : 'euro';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class SnsWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::SNS;
    }

    public function getName()
    {
        return 'Меча и магии';
    }

    public function getNameAuc()
    {
        return 'мира меча и магии';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_stamina' => 1,
            'seed_ego' => -1,
            'seed_intellect' => -1,
        ]);
    }

    public function getNameBase()
    {
        return 'barbarian';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class SteampunkWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::STEAMPUNK;
    }

    public function getName()
    {
        return 'Паровых технологий';
    }

    public function getNameAuc()
    {
        return 'мира паровых технологий';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_custom' => 1,
        ]);
    }

    public function getNameBase()
    {
        return 'oldschool';
    }
}
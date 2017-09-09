<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class CyberpunkWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::CYBERPUNK;
    }

    public function getName()
    {
        return 'Высоких технологий';
    }

    public function getNameAuc()
    {
        return 'мира высоких технологий';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_ego' => 1,
            'seed_intellect' => 1,
            'seed_temper' => -1,
            'seed_stamina' => -1,
        ]);
    }

    public function getNameBase()
    {
        return mt_rand(1,2) == 1 ? 'russian' : 'euro';
    }
}
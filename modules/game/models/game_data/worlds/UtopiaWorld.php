<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class UtopiaWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::UTOPIA;
    }

    public function getName()
    {
        return 'Идиллическая утопия';
    }

    public function getNameAuc()
    {
        return 'идиллической утопии';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_spoil' => 1,
            'seed_intellect' => 1,
            'seed_exotic' => mt_rand(1,2),
            'seed_sensitivity' => 1,
            'seed_pride' => 1,
        ]);
    }

    public function getNameBase()
    {
        return 'utopia';
    }
}
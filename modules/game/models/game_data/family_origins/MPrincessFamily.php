<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class MPrincessFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'mprincess';
    }

    public function getName()
    {
        return 'Принцесса';
    }

    public function getNameAuc()
    {
        return 'принцесса';
    }

    public function affectJsonData($data)
    {
        $data['seed_custom'] = 0;
        return ArrayHelper::sumArrays($data, [
            'seed_temper' => 1,
            'seed_ego' => 1,
            'seed_pride' => 1,
            'seed_spoil' => 2,
        ]);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class NomadFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'nomad';
    }

    public function getName()
    {
        return 'Кочевники';
    }

    public function getNameAuc()
    {
        return 'воспитанная кочевниками';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_exotic' => RandomHelper::randFloat(1,2),
        ]);
    }
}
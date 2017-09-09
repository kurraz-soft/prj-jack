<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class ChurchFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'church';
    }

    public function getName()
    {
        return 'Воспитанница церковного приюта';
    }

    public function getNameAuc()
    {
        return 'воспитанница церковного приюта';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_temper' => -1,
            'seed_ego' => -1,
            'seed_intellect' => 1,
            'seed_custom' => 1,
        ]);
    }
}
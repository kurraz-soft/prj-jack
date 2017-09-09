<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class FisherFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'fisher';
    }

    public function getName()
    {
        return 'Рыбаки';
    }

    public function getNameAuc()
    {
        return 'дочь рыбака';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_temper' => -1,
            'seed_custom' => 1,
        ]);
    }
}
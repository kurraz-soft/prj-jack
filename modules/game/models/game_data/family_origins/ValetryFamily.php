<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class ValetryFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'valetry';
    }

    public function getName()
    {
        return 'Дочь служанки';
    }

    public function getNameAuc()
    {
        return 'дочь служанки';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_custom' => 2,
            'seed_temper' => -1,
            'seed_ego' => -1,
        ]);
    }
}
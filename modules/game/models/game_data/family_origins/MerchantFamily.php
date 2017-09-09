<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class MerchantFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'church';
    }

    public function getName()
    {
        return 'Купец';
    }

    public function getNameAuc()
    {
        return 'купеческая дочь';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_spoil' => 1,
        ]);
    }
}
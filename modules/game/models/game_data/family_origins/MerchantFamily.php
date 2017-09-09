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

    public function getDescriptions()
    {
        return [
            'Мой отец был купцом и водил караваны из далеких стран. Мне и сестрам часто доставались разные замечательные гостинцы, особенно если он уезжал надолго. Жили мы получше, чем многие горожане, и уж тем более чем крестьяне в деревнях.'
        ];
    }
}
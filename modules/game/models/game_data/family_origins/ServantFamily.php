<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class ServantFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'servant';
    }

    public function getName()
    {
        return 'дочь слуг при богатом доме';
    }

    public function getNameAuc()
    {
        return 'дочь слуг при богатом доме';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мои родители служили в поместье богатого промышленника. Отец был старшим дворецким, а мама заведовала кухней. Наш хозяин был довольно добрым человеком, но я с ним почти не общалась. Зато мы вместе играли и дружили с его детьми.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'thief',
'beggar',
'whore',
'weaver',
'freaser',
'maid',
'sufragist',
'brothel',
'maid',

        ];
    }
}
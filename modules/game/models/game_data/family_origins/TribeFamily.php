<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class TribeFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'tribe';
    }

    public function getName()
    {
        return 'Племя дикарей';
    }

    public function getNameAuc()
    {
        return 'выросшая в племени дикарей';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_stamina' => 1,
        ]);
    }

    public function getDescriptions()
    {
        return [
            '  Наше племя бродило по землям предков в поисках доброй охоты. Если находилось хорошее место, мы строили хижины или занимали удобную пещеру. Потом, когда добыча уходила, мы шли вслед за ней. Как и все маленькие дети, я играла в лесу, неподалеку от стоянок, собирала коренья и ягоды.'
        ];
    }
}
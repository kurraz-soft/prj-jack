<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class BankeerFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'bankeer';
    }

    public function getName()
    {
        return 'дочь богатого банкира';
    }

    public function getNameAuc()
    {
        return 'дочь богатого банкира';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мой род издавна занимался банковской деятельностью, так что я родилась в весьма обеспеченной семье. Отец всегда говорил, что мир крутится вокруг денег, а сами деньги крутятся вокруг него. У нас был большой красивый дом и много слуг: шофер, садовник, кухарки и горничные.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'avanturiste',
'rich_bride',
'rich_bride',
'sufragist',

        ];
    }
}
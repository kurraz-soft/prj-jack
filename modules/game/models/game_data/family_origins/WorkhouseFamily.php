<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class WorkhouseFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'workhouse';
    }

    public function getName()
    {
        return 'воспитанница сиротского приюта';
    }

    public function getNameAuc()
    {
        return 'воспитанница сиротского приюта';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мои родители умерли, когда я была еще маленькой, и по закону о бездомных меня определили на воспитание в работный дом. Мы жили как в тюрьме, работая от рассвета до заката на ткацких станках. Если кто-то не выполнял свою норму, его пороли розгами.',
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
'thug',
'sufragist',
'maid',
'maid',

        ];
    }
}
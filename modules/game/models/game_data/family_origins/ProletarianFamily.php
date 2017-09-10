<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class ProletarianFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'proletarian';
    }

    public function getName()
    {
        return 'дочь заводского работника';
    }

    public function getNameAuc()
    {
        return 'дочь заводского работника';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я родилась в рабочей семье. Отец трудился на сталелитейном комбинате, а мама на ткацкой фабрике. Они работали по двенадцать часов в день и очень уставали, так что вести хозяйство и ухаживать за больной бабушкой приходилось мне.',
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
'brothel',
'maid',
'maid',

        ];
    }
}
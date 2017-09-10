<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class FreetraderFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'freetrader';
    }

    public function getName()
    {
        return 'выросшая на торговом транспорте';
    }

    public function getNameAuc()
    {
        return 'выросшая на торговом транспорте';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'В детстве я повидала много планет, но только из космоса. Как и все дети вольных торговцев, мы с сестрами воспитывались прямо на кораблях, где были все условия для комфортной жизни. Места для игр всегда не хватало, поэтому развлекались мы в вир реале.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'academy',
'mech',
'contraband',

        ];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class GendesignerFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'gendesigner';
    }

    public function getName()
    {
        return 'выросшая на промышленной станции';
    }

    public function getNameAuc()
    {
        return 'выросшая на промышленной станции';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я выросла на гигантской орбитальной станции, где работали мои родители. Они были нанофармакологами и разрабатывали новые симбидраги для военных. Гипнокурсам они не доверяли и обучали меня сами. А вообще, я всегда мечтала жить на планете, где больше детей.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'time_plice',
'academy',
'mech',

        ];
    }
}
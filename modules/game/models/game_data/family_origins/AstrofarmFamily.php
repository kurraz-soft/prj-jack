<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class AstrofarmFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'astrofarm';
    }

    public function getName()
    {
        return 'выросшая на орбитальной станции';
    }

    public function getNameAuc()
    {
        return 'выросшая на орбитальной станции';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мои родители владели большой астрофермой на орбите одной промышленной колонии. Доходы у нас были приличные, и я могла играть среди зелени, а не в загаженной атмосфере планеты. Обучалась я по гипнопленкам. И, конечно, помогала родителям на ферме.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'time_plice',
'academy',
'mech',
'astrofarmer',
'installer',
'contraband',

        ];
    }
}
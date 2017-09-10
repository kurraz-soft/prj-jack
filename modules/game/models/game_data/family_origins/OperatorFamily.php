<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class OperatorFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'operator';
    }

    public function getName()
    {
        return 'дочь оператора производственной базы';
    }

    public function getNameAuc()
    {
        return 'дочь оператора производственной базы';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Моя мама работала оператором производства на полярном репликационном центре. Отца у меня не было, а крайний север не лучшее место для ребенка. Поэтому воспитывалась я в общественном детском центре, а маму навещала только по выходным.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'student',
'hymnast',
'writer',
'artist',

        ];
    }
}
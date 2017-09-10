<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class AdmiralFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'admiral';
    }

    public function getName()
    {
        return 'адмиральская дочка';
    }

    public function getNameAuc()
    {
        return 'адмиральская дочка';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я выросла в офицерской семье. Отец был капитаном звездного флота, а дед — адмиралом. Деду подчинялся флот всего сектора. Я воспитывалась в его доме на планете, потому что папа постоянно был в дальнем космосе. Образование я получила в самой лучшей частной школе.',
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
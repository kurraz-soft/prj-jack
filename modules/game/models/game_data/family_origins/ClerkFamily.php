<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class ClerkFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'clerk';
    }

    public function getName()
    {
        return 'дочь конторского работника';
    }

    public function getNameAuc()
    {
        return 'дочь конторского работника';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мой отец работал клерком при фабричной администрации, а мама вела хозяйство по дому и воспитывала меня с братьями и сестрами. Нельзя сказать, что мы жили богато, но по крайней мере у нас была своя квартира и достаточно еды.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'thief',
'nun',
'oficiant',
'weaver',
'freaser',
'teacher',
'sufragist',
'nurse',

        ];
    }
}
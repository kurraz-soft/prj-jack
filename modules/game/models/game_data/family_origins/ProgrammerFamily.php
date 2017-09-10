<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class ProgrammerFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'programmer';
    }

    public function getName()
    {
        return 'воспитанная в семье среднего класса';
    }

    public function getNameAuc()
    {
        return 'воспитанная в семье среднего класса';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мой отец работал с компьютерами, что-то, связанное с распределенными вычислительными средами. Не знаю точно, но платили ему очень хорошо. Достаточно чтобы мама могла не работать и занималась хозяйством. У меня было два брата и старшая сестра.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'student',
'nurse',
'punk',
'oficiant',
'secretary',
'teacher',
'voleyball',
'karateka',
'hymnast',
'policewoman',
'model',
'hacker',
'writer',

        ];
    }
}
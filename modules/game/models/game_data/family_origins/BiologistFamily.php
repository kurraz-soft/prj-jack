<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class BiologistFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'biologist';
    }

    public function getName()
    {
        return 'воспитанная в интеллигентной семье';
    }

    public function getNameAuc()
    {
        return 'воспитанная в интеллигентной семье';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я выросла в интеллигентной семье. Отец преподавал микробиологию в университете, а мама была научным сотрудником в институте. Мы редко собирались вместе, но зато родители очень много хлопотали чтобы я попала в хорошую школу и определяли меня во всякие кружки творческого развития.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'student',
'nurse',
'writer',
'oficiant',
'secretary',
'teacher',
'voleyball',
'karateka',
'hymnast',
'hacker',
'artist',

        ];
    }
}
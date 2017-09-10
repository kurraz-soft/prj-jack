<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class PolicemanFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'policeman';
    }

    public function getName()
    {
        return 'дочь полицейского';
    }

    public function getNameAuc()
    {
        return 'дочь полицейского';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мой папа был участковым полицейским, а мама учительницей в школе. Жили мы не слишком богато, не не хуже других. Правда в школе всегда находились девочки у которых были более шикарные наряды и дорогие игрушки. Я тоже такие хотела, но мне покупали только дурацкие куклы.',
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

        ];
    }
}
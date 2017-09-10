<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class SurgeonFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'surgeon';
    }

    public function getName()
    {
        return 'дочь преуспевающего пластического хирурга';
    }

    public function getNameAuc()
    {
        return 'дочь преуспевающего пластического хирурга';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мой папа держал небольшую частную клинику и занимался пластической хирургией. Там они и познакомились с мамой. Сколько себя помню она всегда была помешана на красоте. И меня с детства заставляла носить зубные скобки и пользоваться целой кучей лечебной косметики.',
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
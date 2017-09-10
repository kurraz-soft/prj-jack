<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class WorkerFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'worker';
    }

    public function getName()
    {
        return 'выросшая в семье простого работяги';
    }

    public function getNameAuc()
    {
        return 'выросшая в семье простого работяги';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мой отец работал инженером на машиностроительном заводе. Приходил домой всегда усталый и злой, пил пиво да смотрел телевизор. По-моему до меня ему и дела не было, зато у мамы всегда находилось для меня доброе слово. Я училась в школе и играла с другими детьми.',
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
'hacker',

        ];
    }
}
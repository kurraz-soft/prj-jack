<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class ManagerFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'manager';
    }

    public function getName()
    {
        return 'дочь офисного работника';
    }

    public function getNameAuc()
    {
        return 'дочь офисного работника';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мама и папа очень много работали в офисе, поэтому у них было на меня мало времени. Меня воспитывала бабушка. Она была очень добрая, знала много сказок и интересных историй и всегда помогала делать домашние задания. Я много гуляла и играла с другими девчонками во дворе.',
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
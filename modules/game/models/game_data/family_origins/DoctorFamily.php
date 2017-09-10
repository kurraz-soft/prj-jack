<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class DoctorFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'doctor';
    }

    public function getName()
    {
        return 'дочь известного врача';
    }

    public function getNameAuc()
    {
        return 'дочь известного врача';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мой отец был знаменитым врачом и лечил богатых людей: промышленников, банкиров, ученых. Все его любили и уважали, к нам в дом всегда ходило много гостей, и мы устраивали поэтические вечера. У меня было много красивых кукол и нарядов.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'avanturiste',
'nurse',
'oficiant',
'sufragist',
'freaser',
'teacher',

        ];
    }
}
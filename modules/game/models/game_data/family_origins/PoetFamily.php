<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class PoetFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'poet';
    }

    public function getName()
    {
        return 'воспитанная в семье поэтов';
    }

    public function getNameAuc()
    {
        return 'воспитанная в семье поэтов';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мои родители обладали уникальным чувством языка. Мама была структурным лингвистом, а отец поэтом, причем весьма знаменитым. В доме было правило разговаривать только стихами и меня к этому приучали едва я начала говорить.',
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
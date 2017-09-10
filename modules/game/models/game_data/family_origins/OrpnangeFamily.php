<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class OrpnangeFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'orpnange';
    }

    public function getName()
    {
        return 'воспитанница детского дома';
    }

    public function getNameAuc()
    {
        return 'воспитанница детского дома';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я выросла в детском доме, без родителей. Не знаю, кем они были. Нас воспитывали довольно строго, да и дети друг с другом не церемонились. Игрушек было мало, но мы сами находили чем развлечься.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'thief',
'nurse',
'punk',
'oficiant',
'secretary',
'teacher',
'voleyball',
'karateka',
'hymnast',
'policewoman',
'whore',
'hacker',
'brothel',

        ];
    }
}
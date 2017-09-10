<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class NaturalistFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'naturalist';
    }

    public function getName()
    {
        return 'дочь ученого-естествоиспытателя';
    }

    public function getNameAuc()
    {
        return 'дочь ученого-естествоиспытателя';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мой отец был ученым-натуралистом, изучал живую природу и писал на эту тему толстые скучные книги с непонятными картинками. Своими детьми он интересовался меньше, чем экзотическими животными, зато мама уделяла нам почти все свое время. Она была очень добрая и красивая.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'avanturiste',
'sufragist',
'teacher',
'nurse',

        ];
    }
}
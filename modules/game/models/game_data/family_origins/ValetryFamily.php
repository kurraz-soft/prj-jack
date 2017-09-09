<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class ValetryFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'valetry';
    }

    public function getName()
    {
        return 'Дочь служанки';
    }

    public function getNameAuc()
    {
        return 'дочь служанки';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_custom' => 2,
            'seed_temper' => -1,
            'seed_ego' => -1,
        ]);
    }

    public function getDescriptions()
    {
        return [
            'Моя мама была служанкой в рыцарском замке, а вот отца своего я никогда не знала. Возможно, что даже старый лорд, хотя я его почти не помню. С самого раннего детства меня обучали помогать и прислуживать, но на игры тоже оставалось немало времени.'
        ];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class GypsyFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'gypsy';
    }

    public function getName()
    {
        return 'Цигане';
    }

    public function getNameAuc()
    {
        return 'воспитаная в цыганском таборе';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_temper' => 1,
            'seed_exotic' => RandomHelper::randFloat(1,2.5),
        ]);
    }

    public function getDescriptions()
    {
        return [
            'Меня воспитали цыгане, в бродячем таборе, не сидевшем на одном месте больше нескольких недель. Жизнь моя была довольно беззаботной, хотя и голодной. Одевалась во что придется, крала и клянчила мелочь, но зато была свободна как ветер.'
        ];
    }
}
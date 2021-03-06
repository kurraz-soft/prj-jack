<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class AmazonFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'amazon';
    }

    public function getName()
    {
        return 'Амазонки';
    }

    public function getNameAuc()
    {
        return 'воспитанная отважными амазонками';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_temper' => 1,
            'seed_ego' => 1,
            'seed_pride' => 1,
            'seed_sensitivity' => -1,
        ]);
    }

    public function getDescriptions()
    {
        return [
            '  В моем племени не было мужчин. Наши женщины брали себе мужей на один месяц, а затем убивали их. Если рождался мальчик, его бросали со скалы, а если девочка &#45; то из нее воспитывали охотницу и воительницу. Мужчины боялись нас как огня; мы были сильнее всех.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'heroine',
            'shaman',
            'huntress',
        ];
    }
}
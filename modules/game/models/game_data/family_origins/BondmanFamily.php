<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class BondmanFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'bondman';
    }

    public function getName()
    {
        return 'Крепостные крестьяне';
    }

    public function getNameAuc()
    {
        return 'дочь крепостных крестьян';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_temper' => -1,
            'seed_ego' => -1,
            'seed_sensitivity' => -2,
            'seed_custom' => 1,
            'seed_intellect' => -1,
        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я родилась в самой обычной семье в деревне неподалеку от замка нашего господина. Отец с братьями работали в поле или в лесу, а я помогала матери прясть пряжу и пасла гусей. С другими детьми мы часто играли в салки и прятки на опушке леса.'
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'poor_bride',
            'herbalist',
            'brigand',
            'markitane',
            'valertry',
            'sorceress',
            'nun',
        ];
    }
}
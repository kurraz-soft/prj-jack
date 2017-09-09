<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class BarbarianKingFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'barbarian_king';
    }

    public function getName()
    {
        return 'Монархи варваров';
    }

    public function getNameAuc()
    {
        return 'принцесса варваров';
    }

    public function affectJsonData($data)
    {
        //$data['seed_occupation'] = 'аристократка';
        $data['seed_custom'] = 0;
        return ArrayHelper::sumArrays($data, [
            'seed_temper' => 1,
            'seed_ego' => 1,
            'seed_pride' => 1,
            'seed_spoil' => 2,
        ]);
    }

    public function getDescriptions()
    {
        return [
            '  Мой отец был мудрым правителем и отважным воином. Он сам водил в поход свои войска и привозил богатую добычу, много золота и рабов. Я жила во дворце, где сотня слуг в любую секунду готова была исполнить любое мое пожелание.'
        ];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class OrphanFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'orphan';
    }

    public function getName()
    {
        return 'Беспризорница';
    }

    public function getNameAuc()
    {
        return 'беспризорница';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_stamina' => -1,
            'seed_temper' => 1,
            'seed_pride' => -1,
            'seed_intellect' => -1,
        ]);
    }

    public function getDescriptions()
    {
        return [
            'Своих родителей я не помню, наверное, они умерли когда я была маленькой, а может и вовсе бросили меня чтобы не кормить лишний рот. В общем, моей семьей стали бездомные нищие и другие беспризорники. С малых лет мне пришлось учиться добывать себе еду и ночевать на улице.'
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'thief',
            'beggar',
            'whore',
            'markitane',
            'valertry',
            'heroine',
            'sorceress',
            'thug',
        ];
    }
}
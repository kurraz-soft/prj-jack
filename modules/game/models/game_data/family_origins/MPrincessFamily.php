<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class MPrincessFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'mprincess';
    }

    public function getName()
    {
        return 'Принцесса';
    }

    public function getNameAuc()
    {
        return 'принцесса';
    }

    public function affectJsonData($data)
    {
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
            'С детства я привыкла к роскоши, достойной принцессы. Хотя я и была младшей дочерью, но зато самой любимой. И мама и папа души во мне не чаяли, и все в замке исполняли мои капризы. Вместе с сестрами и слугами мы часто играли в саду.'
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'mprincess',
        ];
    }
}
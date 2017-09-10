<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class MinitruthFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'minitruth';
    }

    public function getName()
    {
        return 'дочь функционера министерства правды';
    }

    public function getNameAuc()
    {
        return 'дочь функционера министерства правды';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мои родители занимали важные посты в Министерстве Правды, поэтому у нас был паёк значительно лучший, чем у простых пролов. Добрые, но строгие учителя прививали мне понимание Великого Замысла, чтобы я тоже могла наставлять пролов когда подрасту.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'mind_contol',
'time_plice',
'jailer',
'anter',

        ];
    }
}
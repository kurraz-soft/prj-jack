<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class ShamanOccupation implements IOccupation
{
    public function getId()
    {
        return 'shaman';
    }

    public function getName()
    {
        return 'шаманка';
    }

    public function getDescriptions()
    {
        return [
            'Я сызмальства умела слушать ветер, зверей, птиц и деревья, поэтому, повзрослев, стала ученицей шамана. Это очень почетное занятие. Все приносят шаману подарки, чтобы он задобрил духов перед охотой, исцелил раны от когтей свирепого зверя или испросил у предков мудрого совета.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
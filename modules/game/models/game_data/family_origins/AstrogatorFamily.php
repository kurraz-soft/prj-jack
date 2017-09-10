<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class AstrogatorFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'astrogator';
    }

    public function getName()
    {
        return 'воспитаная на развитой планете';
    }

    public function getNameAuc()
    {
        return 'воспитаная на развитой планете';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я выросла вместе с мамой, а отца видела очень редко. Он работал астронавигатором на гиперпространственном транспортнике. Правда ,он при каждой возможности выходил на связь и даже рассказывал мне сказки на ночь по видеофону. Он был очень умный и добрый.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'time_plice',
'academy',
'mech',
'contraband',

        ];
    }
}
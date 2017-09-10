<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class AsteroidFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'asteroid';
    }

    public function getName()
    {
        return 'выросшая на астероидной буровой базе';
    }

    public function getNameAuc()
    {
        return 'выросшая на астероидной буровой базе';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я выросла на космической буровой станции в чреве богатого ильменитовыми рудами астероида. У родителей не было денег, чтобы отправить меня обучаться на планету. Детей на астероиде было мало, места для игр еще меньше. В общем, было скучно. ',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'time_plice',
'academy',
'mech',
'astrofarmer',
'installer',
'contraband',

        ];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class BioreactorFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'bioreactor';
    }

    public function getName()
    {
        return 'дочь оператора биореактора';
    }

    public function getNameAuc()
    {
        return 'дочь оператора биореактора';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я выросла в подземном комплексе, где работали мои родители. Они обслуживали биореактор, превращавший врагов народа и прочие отбросы общества в ценные удобрения. Это ли не наглядная демонстрация мудрости нашего великого Вождя и его заботы о народном благе?',
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
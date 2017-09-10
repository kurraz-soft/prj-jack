<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class FinanceFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'finance';
    }

    public function getName()
    {
        return 'дочь преуспевающего финансиста';
    }

    public function getNameAuc()
    {
        return 'дочь преуспевающего финансиста';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мой отец был крутым биржевым брокером, а мама актрисой в театре. Правда, когда я подросла, она уже не работала. Папа мало времени проводил дома. Мама подозревала его в неверности и много пила. Подсела на обезболивающие. Иногда она срывалась на мне, поэтому я тоже не любила сидеть дома.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'major',
'model',
'writer',
'artist',

        ];
    }
}
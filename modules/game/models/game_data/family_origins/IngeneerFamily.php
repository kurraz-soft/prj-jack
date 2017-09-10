<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class IngeneerFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'ingeneer';
    }

    public function getName()
    {
        return 'дочь инженера';
    }

    public function getNameAuc()
    {
        return 'дочь инженера';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я родилась в семье инженера. Папа обслуживал и ремонтировал паровые котлы и прочие агрегаты на ближайшей фабрике. Эта работа очень важна, потому что без машин вся фабрика встанет.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'avanturiste',
'nurse',
'oficiant',
'sufragist',
'freaser',
'teacher',

        ];
    }
}
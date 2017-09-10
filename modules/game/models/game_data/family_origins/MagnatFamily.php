<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class MagnatFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'magnat';
    }

    public function getName()
    {
        return 'выросшая в семье промышленного магната';
    }

    public function getNameAuc()
    {
        return 'выросшая в семье промышленного магната';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я родилась в хорошей семье. Мой дед владел несколькими фабриками, а отец работал в совете директоров. Мама, в основном, сидела дома и занималась нашим воспитанием: у меня были братья и сестры. И, конечно, у нас в доме было полно слуг, которые выполняли разную работу.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'avanturiste',
'rich_bride',
'rich_bride',
'sufragist',

        ];
    }
}
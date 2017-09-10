<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class ThiefOccupation implements IOccupation
{
    public function getId()
    {
        return 'thief';
    }

    public function getName()
    {
        return 'воровка';
    }

    public function getDescriptions()
    {
        return [
            'Так получилось, что когда я выросла, позаботиться обо мне было не кому. Пришлось заботиться самой. Пальцы у меня всегда были ловкие, так что добыть незаметно кошелек какого-нибудь ротозея особой проблемы не составляло. Тем и жила, пока не наткнулась на чертов Туман.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
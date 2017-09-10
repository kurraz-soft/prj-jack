<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class MilkerOccupation implements IOccupation
{
    public function getId()
    {
        return 'milker';
    }

    public function getName()
    {
        return 'доярка';
    }

    public function getDescriptions()
    {
        return [
            'С детства мне больше всего нравилось ухаживать за коровами, так что я стала дояркой. Работа, в общем, не сложная и времени свободного достаточно. Жизнь такая мне нравилась, но вот попала случайно в Туманы...',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
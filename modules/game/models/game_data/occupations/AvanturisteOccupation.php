<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class AvanturisteOccupation implements IOccupation
{
    public function getId()
    {
        return 'avanturiste';
    }

    public function getName()
    {
        return 'светская авантюристка';
    }

    public function getDescriptions()
    {
        return [
            'Хотя на свете больше всего бедняков без гроша за душой, есть и толстосумы у которых кошельки лопаются от золота. Я имела возможность вращаться в их кругах и немного погреть руки. Подлог, соблазнение, шантаж... В конце концов, девушке надо на что-то жить!',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
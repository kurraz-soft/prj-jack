<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class NunOccupation implements IOccupation
{
    public function getId()
    {
        return 'nun';
    }

    public function getName()
    {
        return 'монахиня';
    }

    public function getDescriptions()
    {
        return [
            'Грязь и страдания мира всегда тяготили меня, и потому, едва возникла такая возможность я ушла в монахини, удалившись от мира, чтобы молиться во славу Всевышнего. Нравы в аббатстве были строгие, но я тому только радовалась. В монастыре было действительно спокойно и мирно - не только телу, но и душе.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
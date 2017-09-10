<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class ThugOccupation implements IOccupation
{
    public function getId()
    {
        return 'thug';
    }

    public function getName()
    {
        return 'уличная грабительница';
    }

    public function getDescriptions()
    {
        return [
            'Еще в детстве я могла надрать зад любому мальчишке, и, когда выросла, навыков не растеряла. Может, мужики и сильнее, но я зато ловкая и злая. Прибилась к уличной банде и доказала, что я чего-то стою. Мы держали в страхе три квартала разом. Конечно, власти пытались нас гонять, только руки коротки!',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
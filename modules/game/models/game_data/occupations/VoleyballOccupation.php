<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class VoleyballOccupation implements IOccupation
{
    public function getId()
    {
        return 'voleyball';
    }

    public function getName()
    {
        return 'волейболистка';
    }

    public function getDescriptions()
    {
        return [
            'Я всегда была спортивной и подвижной девчонкой, так что меня записали в спортивную секцию по волейболу. Когда я повзрослела, у меня за плечами уже была пара призов с больших юношеских соревнований. Так что решила заняться спортом профессионально...',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class TribalGirlOccupation implements IOccupation
{
    public function getId()
    {
        return 'tribal_girl';
    }

    public function getName()
    {
        return 'девушка';
    }

    public function getDescriptions()
    {
        return [
            'Когда я выросла, то стала вместе с другими женщинами заботиться о поддержании огня: большая беда для всего племени, если огонь потухнет. Много молодых охотников хотели взять меня в жены, но мой брат был очень ревнив и не подпускал ко мне никого. Он любил сам меня целовать.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
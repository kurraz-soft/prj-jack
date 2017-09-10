<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class AnterOccupation implements IOccupation
{
    public function getId()
    {
        return 'anter';
    }

    public function getName()
    {
        return 'рядовая работница';
    }

    public function getDescriptions()
    {
        return [
            'По достижении соответствующего возраста я была определена на работу на оружейный завод. Условия труда замечательные: рабочий день не более четырнадцати часов, и каждому полагается индивидуальная койка с тумбочкой. Слава Вождям за такую заботу о простых рабочих.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
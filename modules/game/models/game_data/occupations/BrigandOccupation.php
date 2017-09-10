<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class BrigandOccupation implements IOccupation
{
    public function getId()
    {
        return 'brigand';
    }

    public function getName()
    {
        return 'лесная разбойница';
    }

    public function getDescriptions()
    {
        return [
            'В лесу я всегда была как дома, телом крепче иного мужика. Времена настали неспокойные и пришлось податься к лихим людям, взяться за топор. Грабили купцов да монахов на дроге, но до смертоубийства старались не доводить. С жителями местными дружили: мы им денежкой подсобим, а они нас зимой укроют.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
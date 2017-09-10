<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class ModelOccupation implements IOccupation
{
    public function getId()
    {
        return 'model';
    }

    public function getName()
    {
        return 'фотомодель';
    }

    public function getDescriptions()
    {
        return [
            'У меня красивое тело. И главное, соответствует особым модельным стандартам. Еще подростком я окончила модельную школу, и сразу начала работать на подиуме. На самом деле работа выматывающая, но, конечно, есть и развлечения. Роскошные машины, шмотки, кокаиновые тусовки...',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class MarkitaneOccupation implements IOccupation
{
    public function getId()
    {
        return 'markitane';
    }

    public function getName()
    {
        return 'обозная шлюха';
    }

    public function getDescriptions()
    {
        return [
            'Как-то само собой получилось, что я прибилась к солдатскому обозу и стала греть для бойцов одеяла. За это мне перепадал хлеб с солониной, разбавленное вино, а иногда и несколько монет. После битв можно было собрать что-то с убитых, а вот за ранеными приходилось ухаживать.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class OficiantOccupation implements IOccupation
{
    public function getId()
    {
        return 'oficiant';
    }

    public function getName()
    {
        return 'официантка';
    }

    public function getDescriptions()
    {
        return [
            'На время учебы мне надо было найти работу с гибким графиком, так что я пошла официанткой в один ресторан. Чаевые давали довольно щедрые, правда, приходилось делиться чуть ли не с половиной сотрудников. Так уж все заведено.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
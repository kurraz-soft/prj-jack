<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class AstrofarmerOccupation implements IOccupation
{
    public function getId()
    {
        return 'astrofarmer';
    }

    public function getName()
    {
        return 'оператор орбитальной фермы';
    }

    public function getDescriptions()
    {
        return [
            'Когда я подросла, то начала работать на астроферме. В принципе, даже крупной орбитальной станцией может управлять всего несколько человек, так как основную работу делает автоматика. Но у этого есть минус: у меня было довольно мало знакомых, с кем можно было лично пообщаться. Все время одни и те же лица.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
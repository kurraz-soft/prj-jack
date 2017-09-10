<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class JailerOccupation implements IOccupation
{
    public function getId()
    {
        return 'jailer';
    }

    public function getName()
    {
        return 'тюремщица';
    }

    public function getDescriptions()
    {
        return [
            'Вообще, такая мера пресечения как заключение у нас не используется. Преступник отправляется либо на ментальную коррекцию, либо в биореактор, чтобы так или иначе послужить обществу. Но врагов у народа так много, что приходится содержать их годами в ожидании суда. Я работала в одной из таких тюрем.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
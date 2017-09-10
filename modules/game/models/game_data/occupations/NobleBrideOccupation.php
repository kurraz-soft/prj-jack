<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class NobleBrideOccupation implements IOccupation
{
    public function getId()
    {
        return 'noble_bride';
    }

    public function getName()
    {
        return 'благородная девушка';
    }

    public function getDescriptions()
    {
        return [
            'Я была помолвлена с сыном одного благородного лорда еще с двенадцати лет. Свадьбу тогда было, конечно, играть еще рано, но к тому моменту, как я попала в эти чертовы Туманы, дело к тому шло. Сейчас была бы его женой...',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class SwinerOccupation implements IOccupation
{
    public function getId()
    {
        return 'swiner';
    }

    public function getName()
    {
        return 'свинарка';
    }

    public function getDescriptions()
    {
        return [
            'Когда я выросла, то устроилась в большое фермерское хозяйство свинаркой. Свинья животина непростая, но зато плодовитая. Мяса дает много. А мясо всегда в цене. В общем работа как работа, стабильная. Если бы не Туманы, то и сейчас бы за свиньями ухаживала.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
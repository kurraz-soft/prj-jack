<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class RichBrideOccupation implements IOccupation
{
    public function getId()
    {
        return 'rich_bride';
    }

    public function getName()
    {
        return 'богатая невеста';
    }

    public function getDescriptions()
    {
        return [
            'Конечно, была масса мужчин которые хотели за счет брака со мной наложить руки на денежки моих родственников. Отец в свою очередь пытался подобрать мне мужа, который усилит влияние семьи. А я лично была очарована нашим дворецким. Мы даже хотели вместе сбежать, но я попала в Туманы.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
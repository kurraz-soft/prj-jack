<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class NurseOccupation implements IOccupation
{
    public function getId()
    {
        return 'nurse';
    }

    public function getName()
    {
        return 'медсестра';
    }

    public function getDescriptions()
    {
        return [
            'Я окончила медицинское училище и пошла работать в госпиталь медсестрой. Вообще, работа не самая приятная, но зато можно действительно помогать людям в самую тяжелую минуту. Это важно.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
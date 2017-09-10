<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class TeacherOccupation implements IOccupation
{
    public function getId()
    {
        return 'teacher';
    }

    public function getName()
    {
        return 'учительница начальных классов';
    }

    public function getDescriptions()
    {
        return [
            'Я окончила педучилище и устроилась работать в общеобразовательную школу учителем младших классов. Детишки, конечно, непоседы, и справиться с целой оравой непросто, но я их любила. Педагогическая работа мне была по душе.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
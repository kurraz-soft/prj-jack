<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class Animal extends BaseRule
{
    public $name = 'Ты животное';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы позволяете воспитуемой снова вести себя как человек.',
            1 => 'Вы приказываете воспитуемой вести себя как домашнее животное: она должна всегда ходить только на четвереньках и издавать звуки, подобающие животному. Это поможет научить её смирению, одновременно развивая пластику.',
        ];
    }
}
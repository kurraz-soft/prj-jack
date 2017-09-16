<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class Silence extends BaseRule
{
    public $name = 'Ты молчишь';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы разрешаете воспитуемой разговаривать по собственному желанию и выражать своё мнение.',
            1 => 'Вы приказываете воспитуемой молчать до тех пор, пока её о чем-либо не спросят. Это поможет ей развить выразительность движений и чувствительность, но может подавить темперамент.',
        ];
    }
}
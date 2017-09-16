<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class BeastMilker extends BaseRule
{
    public $name = 'Доярка';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы говорите воспитуемой, что она пока может забыть об исчадии и в ближайшее время ей не нужно будет о нём заботиться.',
            1 => 'Вы приказываете воспитуемой заботиться о вашем исчадии и регулярно доить его, чтобы оно не зачахло в неволе.',
        ];
    }
}
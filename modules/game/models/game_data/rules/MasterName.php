<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class MasterName extends BaseRule
{
    public $name = 'Я - хозяин';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы позволяете воспитуемой обращаться к вам фамильярно и не соблюдать формальных правил общения рабыни и хозяина.',
            1 => 'Вы приказываете воспитуемой впредь вести себя так, как полагается воспитанной рабыне перед своим господином и вежливо называть вас Хозяином. Так она быстрее приучится к полной покорности.',
        ];
    }
}
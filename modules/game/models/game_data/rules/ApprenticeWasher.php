<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class ApprenticeWasher extends BaseRule
{
    public $name = 'Ты можешь воспитуемую';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы решаете мыть воспитуемую самостоятельно, чтобы не отвлекать свою ассистентку от более важных дел.',
            1 => 'Незачем мыть рабыню самому, если эту работу можно поручить ассистентке. Вы просите свою ассистентку, чтобы она мыла %{apprentice_name}%.',
        ];
    }
}
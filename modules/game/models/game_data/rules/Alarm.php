<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class Alarm extends BaseRule
{
    public $name = 'Ты будильник';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы решаете сами просыпаться по утрам, не отвлекаясь на потуги воспитуемой сделать вам приятно или уклониться от своих обязанностей.',
            1 => 'Вы будете использовать воспитуемую в качестве живого будильника. Каждое утро, в указанное время, %{apprentice_name}% должна будить вас нежным глубоким минетом. Такой подход улучшит ваше настроение с утра, а вашу воспитуемую настроит на обучение сексуальным практикам.',
        ];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class Washer extends BaseRule
{
    public $name = 'Ты меня моешь';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы решаете мыться самостоятельно, чтобы не отвлекать свою воспитуемую от более важных дел.',
            1 => 'Незачем мыться самому, если эту работу можно поручить красивой и нежной девушке. В следующий раз когда вы пойдете мыться, рабыня поможет вам.',
        ];
    }
}
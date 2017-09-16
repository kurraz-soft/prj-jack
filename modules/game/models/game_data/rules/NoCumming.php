<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class NoCumming extends BaseRule
{
    public $name = 'Не кончать';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы позволяете воспитуемой испытывать оргазм, чтобы она могла получить некоторую разрядку, но предупреждаете, что можете передумать!',
            1 => 'Вы запрещаете воспитуемой испытывать оргазм, если только вы не дали на то своего специального разрешения. Каждый раз, когда она сможет сдержаться и не кончить, её возбуждение и чувствительность будут расти.',
        ];
    }
}
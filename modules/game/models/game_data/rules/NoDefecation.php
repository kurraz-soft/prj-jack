<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class NoDefecation extends BaseRule
{
    public $name = 'Не гадить';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы позволяете воспитуемой самой ходить в туалет, когда ей приспичит. По крайней мере, она не будет отвлекать вас своими вечными слезами и мольбами.',
            1 => 'Вы запрещаете воспитуемой ходить в туалет без вашего разрешения. Ей будет позволено посещать уборную редко и только под вашим наблюдением. Это поможет научить её смирению, правда, ценой станет настроение воспитуемой.',
        ];
    }
}
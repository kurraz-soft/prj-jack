<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class Urinar extends BaseRule
{
    public $name = 'Ты писсуар';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы говорите воспитуемой, что будете пользоваться обычным туалетом, и её услуги в ближайшее время не понадобятся.',
            1 => 'Вы будете использовать воспитуемую в качестве живого писсуара. %{apprentice_name}% должна будет аккуратно проглатывать всю вашу мочу и вылизывать то, что прольется. Это серьезно снизит её гордыню, а кроме, того повысит ваше настроение или хотя бы научит воспитуемую нужным навыкам, если они еще не наработаны. Плохо влияет на гигиену.',
        ];
    }
}
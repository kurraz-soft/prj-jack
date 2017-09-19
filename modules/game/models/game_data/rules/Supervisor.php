<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class Supervisor extends BaseRule
{
    public function valueTextTemplates()
    {
        return [
            0 => 'Вы сообщаете своей ассистентке, что отныне будете сами присмативать за воспитуемой и сопровождать её при выходах в город. Ей же необходимо сконцентрироваться на других важных делах.',
            1 => 'Вы приказываете своей ассистентке присматривать за вашей воспитуемой и сопровождать её при выходах в город. %{assistant_name}% склоняет голову и обещает исполнить всё в лучшем виде.',
        ];
    }
}
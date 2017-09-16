<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class Forced extends BaseRule
{
    public $name = 'Форсировано';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы говорите воспитуемой, что отныне выполнение установленных вами правил ей придётся обеспечивать лично, без помощи ваших специальных приспособлений и надзора. Но это не значит, что игнорирование выданных приказов останется безнаказанным...',
            1 => 'Вы сообщаете воспитуемой, что будете использовать различные приспособления (такие как анальная груша, кляп, петсьют и туалетные стойки), а также особый надзор вашей ассистентки для того, чтобы не позволять ей игнорировать установленные правила. Когда категорически не хочешь чего-то делать, а заставляют силой - впору отчаяться, но что поделать - надо, значит надо.',
        ];
    }
}
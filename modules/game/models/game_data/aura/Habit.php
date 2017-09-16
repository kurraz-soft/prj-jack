<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\aura;


use app\modules\game\models\game_data\base\BaseAuraAttribute;

class Habit extends BaseAuraAttribute
{
    public function valueDescriptions()
    {
        return [
            0 => '<span style="color: #082567">Сапфировое мерцание привычки</span> <span style="color: #cd0000"> отсутствует напрочь</span>.',
            1 => '<span style="color: #082567">Сапфировое мерцание привычки</span> выглядит очень тускло и заметно лишь в <span style="color: #C71585">одном</span> месте.',
            2 => '<span style="color: #082567">Сапфировое мерцание привычки</span> проявляется довольно слабо и только в <span style="color: #4B0082">паре</span> мест.',
            3 => '<span style="color: #082567">Сапфировое мерцание привычки</span> довольно устойчиво. Вы находите <span style="color: #0000CD">три</span> точки его концентрации.',
            4 => '<span style="color: #082567">Сапфировое мерцание привычки</span> змеится по всей поверхности ауры воспитуемой, охватывая его с <span style="color: #008080">четырех</span> сторон.',
            5 => '<span style="color: #082567">Сапфировое мерцание привычки</span> <span style="color: #008000"> окутывает всю ауру</span> воспитуемой, словно мягкая туманная дымка. Оно смягчает и маскирует все углы, выступы и яркие цвета.',
        ];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\aura;


use app\modules\game\models\game_data\base\BaseAuraAttribute;

class Fear extends BaseAuraAttribute
{
    public function valueDescriptions()
    {
        return [
            0 => '<span style="color: #960018">Рубиновые сполохи страха</span> <span style="color: #cd0000"> ничтожны</span>.',
            1 => '<span style="color: #960018">Рубиновые сполохи страха</span> редки, за минуту вы заметили только <span style="color: #C71585">один</span>.',
            2 => '<span style="color: #960018">Рубиновые сполохи страха</span> возникают лишь время от времени, вы насчитали <span style="color: #4B0082">пару</span> штук за минуту.',
            3 => '<span style="color: #960018">Рубиновые сполохи страха</span> появляются довольно часто. Вы насчитали <span style="color: #0000CD">три</span> штуки.',
            4 => '<span style="color: #960018">Рубиновые сполохи страха</span> весьма яркие и заметные. Вы насчитали <span style="color: #008080">четыре</span> особенно сильных.',
            5 => '<span style="color: #960018">Рубиновые сполохи страха</span> возникают один за другим и не спешат гаснуть, пульсируя, словно переполненные адреналином сердца. Вы насчитали целых <span style="color: #008000">пять</span> штук всего за минуту.',
        ];
    }
}
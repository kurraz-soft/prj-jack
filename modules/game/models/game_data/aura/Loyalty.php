<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\aura;


use app\modules\game\models\game_data\base\BaseAuraAttribute;

class Loyalty extends BaseAuraAttribute
{
    public function valueDescriptions()
    {
        return [
            0 => '<span style="color: #00a86b">Изумрудное сияние преданности</span> <span style="color: #cd0000"> не проявляется вовсе</span>.',
            1 => '<span style="color: #00a86b">Изумрудное сияние преданности</span> видно <span style="color: #C71585">лишь в одном</span> месте, словно тусклая звезда на облачном небосклоне.',
            2 => '<span style="color: #00a86b">Изумрудное сияние преданности</span> образует <span style="color: #4B0082">пару</span> мягко сияющих звездочек.',
            3 => '<span style="color: #00a86b">Изумрудное сияние преданности</span> исходит от <span style="color: #0000CD">трех</span> хорошо заметных звездочек.',
            4 => '<span style="color: #00a86b">Изумрудное сияние преданности</span> исходит от <span style="color: #008080">четырех</span> ярких звезд, освещающих ауру воспитуемой.',
            5 => '<span style="color: #00a86b">Изумрудное сияние преданности</span> доминирует в ауре воспитуемой, усеивая её <span style="color: #008000">мириадами</span> ярких и чистых звездочек.',
        ];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\aura;


use app\modules\game\models\game_data\base\BaseAuraAttribute;

class Power extends BaseAuraAttribute
{
    public function valueDescriptions()
    {
        return [
            0 => '<span style="color: #cd0000">Аура воспитуемой сияет значительно ярче вашей</span>.',
            1 => '<span style="color: #C71585">Аура воспитуемой сияет ярче вашей</span>.',
            2 => '<span style="color: #0000CD">Аура воспитуемой примерно равна вашей по силе</span>.',
            3 => '<span style="color: #008080">Аура воспитуемой тусклее вашей</span>.',
            4 => '<span style="color: #008000">Аура воспитуемой значительно тусклее вашей</span>.',
        ];
    }
}
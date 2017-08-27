<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class StyleFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Чумичка',
            1 => 'Невзрачная',
            2 => 'Ухоженная',
            3 => 'Изящная',
            4 => 'Элегантная',
            5 => 'Икона стиля',
        ];
    }
}
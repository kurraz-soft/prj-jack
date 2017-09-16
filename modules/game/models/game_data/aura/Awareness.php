<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\aura;


use app\modules\game\models\game_data\base\BaseAuraAttribute;

class Awareness extends BaseAuraAttribute
{
    public function valueDescriptions()
    {
        return [
            0 => '<span style="color: #B452CD">Аметистовое ядро осознания</span> <span style="color: #cd0000"> не сформировано</span>.',
            1 => '<span style="color: #B452CD">Аметистовое ядро осознания</span> очень мало, формируясь из <span style="color: #C71585">одной-единственной</span> глобулы.',
            2 => '<span style="color: #B452CD">Аметистовое ядро осознания</span> составлено из <span style="color: #4B0082">двух</span> крепко слепившихся глобул.',
            3 => '<span style="color: #B452CD">Аметистовое ядро осознания</span> имеет средние размеры. Вы насчитали в нем <span style="color: #0000CD">три</span> глобулы.',
            4 => '<span style="color: #B452CD">Аметистовое ядро осознания</span> большое и плотное, сформировано <span style="color: #008080">четырьмя</span> четкими глобулами.',
            5 => '<span style="color: #B452CD">Аметистовое ядро осознания</span> доминирует в центральной части. Его форма говорит о наличии как минимум <span style="color: #008000">пяти</span> хорошо сформированных глобул.',
        ];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\aura;


use app\modules\game\models\game_data\base\BaseAuraAttribute;

class Taming extends BaseAuraAttribute
{
    public function valueDescriptions()
    {
        return [
            0 => '<span style="color: #CD9B1D">Золотистые струны укрощения</span> <span style="color: #cd0000"> едва заметны</span>.',
            1 => '<span style="color: #CD9B1D">Золотистые струны укрощения</span> едва сформированы. Только <span style="color: #C71585">одна</span> из них кажется вам достаточно крепкой.',
            2 => '<span style="color: #CD9B1D">Золотистые струны укрощения</span> видны тут и там. Вы находите <span style="color: #4B0082">пару</span> довольно крепких.',
            3 => '<span style="color: #CD9B1D">Золотистые струны укрощения</span> заметны во многих местах. <span style="color: #0000CD">Три</span> из них особенно кажутся особенно прочными.',
            4 => '<span style="color: #CD9B1D">Золотистые струны укрощения</span> видны повсюду. <span style="color: #008080">Четыре</span> особенно ярких витка проходят по периметру ауры, словно меридианы на глобусе.',
            5 => '<span style="color: #CD9B1D">Золотистые струны укрощения</span> <span style="color: #008000"> охватывают всю ауру</span>, делая её похожей на кусок ветчины в плотной оплетке.',
        ];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\aura;


use app\modules\game\models\game_data\base\BaseAuraAttribute;

class Desperation extends BaseAuraAttribute
{
    public function valueDescriptions()
    {
        return [
            0 => '<span style="color: #464451">Антрацитовый цвет отчаяния</span> <span style="color: #008000"> почти незаметен</span>.',
            1 => '<span style="color: #464451">Антрацитовый цвет отчаяния</span> сформировал <span style="color: #cd0000">одно</span> щупальце, пронизывающее всю ауру воспитуемой насквозь.',
            2 => '<span style="color: #464451">Антрацитовый цвет отчаяния</span> сформировал <span style="color: #cd0000">два</span> щупальца, плотно обхвативших ауру воспитуемой с двух сторон.',
            3 => '<span style="color: #464451">Антрацитовый цвет отчаяния</span> сформировал плотный сгусток, из которого торчат <span style="color: #cd0000">три</span> мерзко извивающихся щупальца.',
            4 => '<span style="color: #464451">Антрацитовый цвет отчаяния</span> разросся и выпустил <span style="color: #cd0000">четыре</span> щупальца, охвативших ауру воспитуемой со всех сторон.',
            5 => '<span style="color: #464451">Антрацитовый цвет отчаяния</span> пронизывает всю ауру рабыни. Вы можете четко видеть <span style="color: #cd0000">пять</span> толстых, омерзительно извивающихся щупалец, которые рвут все остальные цвета в лоскуты.',
        ];
    }
}
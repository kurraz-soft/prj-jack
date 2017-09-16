<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\aura;


use app\modules\game\models\game_data\base\BaseAuraAttribute;

class Corruption extends BaseAuraAttribute
{
    public function valueDescriptions()
    {
        return [
            0 => '<span style="color: #EE1289">Пошло-розовые переливы испорченности</span> <span style="color: #008000"> не уродуют ауру</span> воспитуемой.',
            1 => '<span style="color: #EE1289">Пошло-розовые переливы испорченности</span> собираются в <span style="color: #cd0000">одном</span> месте, формируя отвратительную червоточину.',
            2 => '<span style="color: #EE1289">Пошло-розовые переливы испорченности</span> формируют <span style="color: #cd0000">две</span> омерзительные язвы в ауре воспитуемой.',
            3 => '<span style="color: #EE1289">Пошло-розовые переливы испорченности</span> формируют <span style="color: #cd0000">три</span> мерзкие язвы в ауре воспитуемой.',
            4 => '<span style="color: #EE1289">Пошло-розовые переливы испорченности</span> образуют <span style="color: #cd0000">четыре</span> уродливых изъязвления на ауре воспитуемой.',
            5 => '<span style="color: #EE1289">Пошло-розовые переливы испорченности</span> <span style="color: #cd0000"> видны повсюду</span>, испещряя ауру воспитуемой похожими на кровавые язвы структурами.',
        ];
    }
}
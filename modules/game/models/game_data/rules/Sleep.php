<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class Sleep extends BaseRule
{
    const CAGE = 1;
    const COLD_FLOOR = 2;
    const MAT = 3;
    const WITH_MASTER = 4;
    const BOUDOIR = 5;

    public $name = 'Режим сна';
}
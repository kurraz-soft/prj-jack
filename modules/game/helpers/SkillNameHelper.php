<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\helpers;


class SkillNameHelper
{
    static public function generateBasic($baseLabel)
    {
        return [
            0 => $baseLabel . ' F-',
            1 => $baseLabel . ' D-',
            2 => $baseLabel . ' C-',
            3 => $baseLabel . ' B+',
            4 => $baseLabel . ' A+',
            5 => $baseLabel . ' S+',
        ];
    }
}
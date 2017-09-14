<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\helpers;


class FormatterHelper
{
    static public function colorState($s, $state, $grade_assoc_callback = null)
    {
        if(!$grade_assoc_callback || !is_callable($grade_assoc_callback))
        {
            $grade = $state > 0 ? 5 : 0;
        }else
        {
            $grade = $grade_assoc_callback($state);
        }

        return '<span class="g-color-grade-'.$grade.'">' . $s . '</span>';
    }

    static public function colorAttribute($s, $attr)
    {
        $grade = $attr > 0 ? $attr : 0;
        return '<span class="g-color-grade-'.$grade.'">' . $s . '</span>';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\locations;


use app\modules\game\models\game_data\Apprentice;

class SlaveMarketLocation
{
    public function getSlaveEpithet(Apprentice $apprentice)
    {
        $ret = 'доступная по цене';

        if($apprentice->attributes->constitution->value == 1)
            $ret = 'стройная словно кипарис';
        if($apprentice->attributes->beauty->value == 3)
            $ret = 'очаровательная';
        if($apprentice->attributes->temperament->value == 4)
            $ret = 'норовистая';
        if($apprentice->attributes->sensuality->value == 4)
            $ret = 'нежная и чуткая';
        if($apprentice->attributes->stamina->value == 4)
            $ret = 'крепкая и здоровая';
        if($apprentice->attributes->beauty->value == 4)
            $ret = 'прелестная';
        if($apprentice->attributes->temperament->value == 5)
            $ret = 'горячая как огонь';
        if($apprentice->attributes->sensuality->value == 5)
            $ret = 'нежная как прекрасный цветок';
        if($apprentice->attributes->stamina->value == 5)
            $ret = 'необычайно сильная и выносливая';
        if($apprentice->attributes->beauty->value == 5)
            $ret = 'прекрасная как сами звезды';
        if($apprentice->attributes->exoticism->value >= 2)
            $ret = 'экзотическая';

        return $ret;
    }
}
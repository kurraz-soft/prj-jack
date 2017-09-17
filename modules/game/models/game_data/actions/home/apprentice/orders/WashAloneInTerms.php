<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\actions\home\apprentice\orders;


use app\modules\game\helpers\FormatterHelper;
use app\modules\game\helpers\VarHelper;
use app\modules\game\models\game_data\Apprentice;
use app\modules\game\models\game_data\base\BaseGameAction;
use app\modules\game\models\game_data\GameActionSlide;
use app\modules\game\models\game_data\Home;

class WashAloneInTerms extends BaseGameAction
{
    public function getEndRoute(): array
    {
        return ['index'];
    }

    public function __construct(Apprentice $apprentice, Home $home)
    {
        $this->caption = 'Термы';

        $text = 'Вы отводите подопечную в местные термы, разумно решив, что отправлять её одну в такое место будет не лучшим решением. Пока вы ждёте снаружи, %{apprentice_name}% вместе с десятками смешавшихся тел тщательно смывает с себя впитавшуюся смесь пота и запаха трущоб. Она выходит из терм чистой, и довольной хотя бы такой представившейся возможностью окунуться в теплую воду.';
        $text = VarHelper::fillStringVars($text, ['apprentice_name' => $apprentice->name]);

        $bg = FormatterHelper::imgPath($apprentice->visuals->bathing_alone, 'gif');

        $this->slides[] = new GameActionSlide($text,$bg);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\traits;


use app\modules\game\models\game_data\attributes\BeautyFemale;
use app\modules\game\models\game_data\base\ApprenticeTrait;

/**
 * Class Bruises
 * @package app\modules\game\models\game_data\traits
 *
 * Синяки
 */
class Bruises extends ApprenticeTrait
{
    public $beauty_penalty = 1;

    public function getName()
    {
        return 'Шрамы';
    }

    public function onAttach()
    {
        /**
         * @var BeautyFemale $beauty
         */
        $beauty = $this->getContext()->attributes->beauty;
        $beauty->value = max(0, $beauty->value - $this->beauty_penalty);
    }

    public function onDetach()
    {
        /**
         * @var BeautyFemale $beauty
         */
        $beauty = $this->getContext()->attributes->beauty;
        $beauty->value = min($beauty->getMaxValue(), $beauty->value + $this->beauty_penalty);
    }
}
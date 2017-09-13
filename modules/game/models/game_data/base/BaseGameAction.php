<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\models\game_data\GameActionSlide;

abstract class BaseGameAction
{
    /**
     * @var GameActionSlide[]
     */
    public $slides;
    /**
     * @var string
     */
    public $caption;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $info;

    public function getViewFile()
    {
        return '/action';
    }

    abstract public function getEndRoute();
}
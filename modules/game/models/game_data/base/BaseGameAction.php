<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\models\game_data\GameActionSlide;
use yii\web\Controller;

abstract class BaseGameAction
{
    /**
     * @var GameActionSlide[]
     */
    public $slides;
    /**
     * @var string
     */
    public $caption = '';
    /**
     * @var string
     */
    public $description = '';
    /**
     * @var string
     */
    public $info = '';

    /**
     * @var Controller
     */
    public $controller = null;

    public function getViewFile() : string
    {
        return '/action';
    }

    public function getEndRoute() : array
    {
        return ['index'];
    }

    public function setController(Controller $controller) : BaseGameAction
    {
        $this->controller = $controller;

        return $this;
    }

    public function render() : string
    {
        return $this->controller->render($this->getViewFile(),[
            'action' => $this,
        ]);
    }
}
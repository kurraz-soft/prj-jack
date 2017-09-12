<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\controllers;


use app\components\Controller;
use app\modules\game\assets\AppAsset;
use app\modules\game\models\GameMechanics;

abstract class GameController extends Controller
{
    public $asset;

    public $is_outside = true;

    public function init()
    {
        $this->on(Controller::EVENT_BEFORE_ACTION, function () {
            $this->asset = AppAsset::register($this->view);

            GameMechanics::getInstance()->loadGame();

            $this->setCharacterLocation();
        });
        $this->on(Controller::EVENT_AFTER_ACTION, function (){

            GameMechanics::getInstance()->saveGame();
        });

        parent::init();
    }

    public function setCharacterLocation()
    {
        $character = GameMechanics::getInstance()->gameRegister->character;
        $location_manager = GameMechanics::getInstance()->gameRegister->location_manager;

        //set character current location
        $route = ['/' . $this->getRoute()];

        if($location_manager->getLocation($route))
            $character->location_route = $route;
    }
}
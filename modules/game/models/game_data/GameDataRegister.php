<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameData;
use app\modules\game\models\game_data\base\IAutoSerializable;
use app\modules\game\models\GameData;

class GameDataRegister implements IAutoSerializable
{
    /**
     * @var Date
     */
    public $date;

    /**
     * @var Debt
     */
    public $debt;

    /**
     * @var Character
     */
    public $character;

    /**
     * @var ApprenticeManager
     */
    public $apprentice_manager;

    /**
     * @var LocationManager
     */
    public $location_manager;

    /**
     * @var BaseGameData[]
     */
    private $_objects;

    public function __construct()
    {
        foreach ($this->serializableParams() as $name => $class)
        {
            $this->$name = new $class();
            $this->_objects[$name] = &$this->$name;
        }
    }

    public function serializableParams()
    {
        return [
            'date' => Date::class,
            'debt' => Debt::class,
            'location_manager' => LocationManager::class,
            'character' => Character::class,
            'apprentice_manager' => ApprenticeManager::class,
        ];
    }

    public function import(GameData $game_data)
    {
        foreach ($this->_objects as $obj)
        {
            if($obj instanceof BaseGameData)
                $obj->import($game_data);
        }
    }

    public function export(GameData $game_data)
    {
        foreach ($this->_objects as $obj)
            $obj->export($game_data);
    }

    public function getCharacterLocation()
    {
        if(!$this->location_manager->getLocation($this->character->location_route))
        {
            $this->character->location_route = LocationManager::getStartLocationRoute();
        }

        return $this->location_manager->getLocation($this->character->location_route);
    }
}
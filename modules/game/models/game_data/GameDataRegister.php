<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameData;
use app\modules\game\models\GameData;

class GameDataRegister
{
    /**
     * @var Date
     */
    public $date;

    /**
     * @var Wallet
     */
    public $wallet;

    /**
     * @var Debt
     */
    public $debt;

    /**
     * @var Character
     */
    public $character;

    /**
     * @var BaseGameData[]
     */
    private $_objects;

    public function __construct()
    {
        $this->_objects = [
            $this->date = new Date(),
            $this->wallet = new Wallet(),
            $this->debt = new Debt(),
            $this->character = new Character(),
        ];
    }

    public function import(GameData $game_data)
    {
        foreach ($this->_objects as $obj)
            $obj->import($game_data);
    }

    public function export(GameData $game_data)
    {
        foreach ($this->_objects as $obj)
            $obj->export($game_data);
    }
}
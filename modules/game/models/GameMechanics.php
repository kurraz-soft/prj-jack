<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models;


use app\modules\game\models\game_data\GameDataRegister;

class GameMechanics
{
    /**
     * @var GameData
     */
    public $activeGameData;
    /**
     * @var GameDataRegister
     */
    public $gameRegister;

    /**
     * @var static
     */
    private static $_inst = null;

    static public function getInstance()
    {
        if(!static::$_inst)
        {
            static::$_inst = new static();
        }

        return static::$_inst;
    }

    private function __construct()
    {
        $this->gameRegister = new GameDataRegister();
    }

    /**
     * @param null $n
     * @return GameData
     */
    public function loadGame($n = null)
    {
        /**
         * @var GameData $game_data
         * @var GameData $game_data_load
         */
        if($n === null)
        {
            $game_data = GameData::findActive(\Yii::$app->user->id);
        }else
        {
            $game_data_load = GameData::find()->where(['user_id' => \Yii::$app->user->id, 'n' => $n])->one();
            $game_data = GameData::findActive(\Yii::$app->user->id);

            $game_data->data = $game_data_load->data;
            $game_data->save();
        }
        $this->activeGameData = $game_data;

        $this->initGame();

        return $game_data;
    }

    /**
     * @return GameDataRegister
     */
    public function initGame()
    {
        $reg = new GameDataRegister();
        $reg->import($this->activeGameData);

        $this->gameRegister = $reg;

        return $reg;
    }

    /**
     * @var string $character_id - character_id from masters library
     * @return GameData
     */
    public function newGame($character_id)
    {
        $game = GameData::findActive(\Yii::$app->user->id);
        $game->data = '';
        $game->save();

        $this->activeGameData = $game;

        $this->initGame();

        $this->gameRegister->character->loadFromMastersLibrary($character_id);

        return $game;
    }

    /**
     * @return bool
     */
    public function saveGame()
    {
        //save game components
        $this->gameRegister->export($this->activeGameData);

        $this->activeGameData->save();

        return true;
    }
}
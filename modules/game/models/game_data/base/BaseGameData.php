<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\models\GameData;

abstract class BaseGameData implements ISerializable
{
    public function import(GameData $game_data)
    {
        $data = [];
        if(isset($game_data->getExtractedData()[get_called_class()]))
        {
            $data = $game_data->getExtractedData()[get_called_class()];
        }
        $this->unserialize($data);
    }

    public function export(GameData $game_data)
    {
        $data = $this->serialize();
        $game_data->setDataValue(get_called_class(), $data);
    }
}
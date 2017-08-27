<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\models\GameData;

interface IImportable
{
    public function import(GameData $game_data);
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\models\GameData;

interface IExportable
{
    public function export(GameData $game_data);
}
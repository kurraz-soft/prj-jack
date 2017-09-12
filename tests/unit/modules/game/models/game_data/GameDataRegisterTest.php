<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data;


use app\modules\game\models\game_data\base\ILocation;
use app\modules\game\models\game_data\GameDataRegister;
use app\modules\game\models\GameData;
use Codeception\Test\Unit;

class GameDataRegisterTest extends Unit
{
    public function testGetCharacterLocation()
    {
        $r = new GameDataRegister();
        $r->import(new GameData());

        expect($r->getCharacterLocation())->isInstanceOf(ILocation::class);
    }
}
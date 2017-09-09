<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\libraries;


use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;
use Codeception\Test\Unit;

class WorldLibraryTest extends Unit
{
    public function testGetRandomWorldId()
    {
        mt_srand(1);
        $id = WorldLibrary::getRandomWorldId();
        expect_that(isset(WorldLibrary::WORLD_TO_CLASS[$id]));
        mt_srand(2);
        $id2 = WorldLibrary::getRandomWorldId();
        expect($id)->notEquals($id2);
    }

    public function testFactory()
    {
        $w = WorldLibrary::factory(WorldLibrary::getRandomWorldId());
        expect($w)->isInstanceOf(IWorld::class);
    }
}
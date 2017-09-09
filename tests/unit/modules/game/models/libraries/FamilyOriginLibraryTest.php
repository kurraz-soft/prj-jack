<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\libraries;


use app\modules\game\models\game_data\base\IFamilyOrigin;
use app\modules\game\models\game_data\family_origins\FarmersFamily;
use app\modules\game\models\libraries\FamilyOriginLibrary;
use Codeception\Test\Unit;

class FamilyOriginLibraryTest extends Unit
{
    public function testFindAll()
    {
        $families = FamilyOriginLibrary::findAll();
        $files = scandir(\Yii::getAlias('@game/models/game_data/family_origins'));

        expect(count($families))->equals(count($files) - 2);
        expect($families)->contains(FarmersFamily::class);
    }

    public function testGetRandomId()
    {
        $families = FamilyOriginLibrary::findAll();
        $id = FamilyOriginLibrary::getRandomId();

        expect_that(isset($families[$id]));
        $f = new $families[$id];
        expect($f)->isInstanceOf(IFamilyOrigin::class);
    }

    public function testFactory()
    {
        $id = FamilyOriginLibrary::getRandomId();
        $f = FamilyOriginLibrary::factory($id);

        expect($f)->isInstanceOf(IFamilyOrigin::class);
    }
}
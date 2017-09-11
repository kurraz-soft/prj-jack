<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\libraries;


use app\modules\game\models\libraries\ArmorLibrary;
use Codeception\Test\Unit;

class ArmorLibraryTest extends Unit
{

    public function testLoad()
    {
        $items = ArmorLibrary::load();
        expect(count($items))->greaterThan(0);
    }

    public function testFindById()
    {
        $item = ArmorLibrary::findById('no_armor');
        expect_that(is_array($item));
        expect($item['id'])->equals('no_armor');
        expect($item['name'])->equals('Без доспеха');
    }
}
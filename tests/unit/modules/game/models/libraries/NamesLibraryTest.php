<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\libraries;


use app\modules\game\models\libraries\NamesLibrary;
use Codeception\Test\Unit;

class NamesLibraryTest extends Unit
{
    public function testGetRandom()
    {
        $names = NamesLibrary::load('euro');

        expect($names)->contains(NamesLibrary::getRandom('euro'));
    }
}
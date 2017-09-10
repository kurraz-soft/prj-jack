<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\libraries;


use app\modules\game\models\game_data\base\IOccupation;
use app\modules\game\models\game_data\occupations\PoorBrideOccupation;
use app\modules\game\models\libraries\OccupationsLibrary;
use Codeception\Test\Unit;

class OccupationsLibraryTest extends Unit
{
    public function testFactory()
    {
        $oc = OccupationsLibrary::factory('poor_bride');

        expect($oc)->isInstanceOf(PoorBrideOccupation::class);
    }

    public function testGetRandomId()
    {
        $oc = OccupationsLibrary::factory(OccupationsLibrary::getRandomId());

        expect($oc)->isInstanceOf(IOccupation::class);
    }
}
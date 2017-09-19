<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\libraries;


use app\modules\game\models\game_data\Person;
use app\modules\game\models\game_data\attributes\AgeFemale;
use app\modules\game\models\libraries\ApprenticesLibrary;
use Codeception\Test\Unit;

class ApprenticesLibraryTest extends Unit
{
    public function testFindAll()
    {
        $files = scandir(\Yii::getAlias('@game/data/apprentices'));

        $find = ApprenticesLibrary::findAll(true);

        expect(count($find))->equals(count($files) - 2);
    }

    public function testLoad()
    {
        $json = ApprenticesLibrary::load('1');

        expect_that(isset($json['fullimage']));
        expect($json['fullimage'])->equals('girls/full/001_blond_long_blue');
    }

    public function testFillUpLoadedData()
    {
        $json = ApprenticesLibrary::load('1');
        $data = ApprenticesLibrary::fillUpLoadedData($json);

        expect(strlen($data['stock_family_description']))->greaterThan(0);
    }

    public function testExport()
    {
        $ap = ApprenticesLibrary::export('1');

        expect($ap)->isInstanceOf(Person::class);
        expect($ap->age->value)->equals(AgeFemale::LOLI);
        expect($ap->visuals->fullimage)->notEmpty();
        expect($ap->visuals->cleaning)->notEmpty();
    }
}
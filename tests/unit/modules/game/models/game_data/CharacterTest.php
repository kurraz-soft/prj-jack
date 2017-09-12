<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data;


use app\modules\game\models\game_data\attributes\StrengthMale;
use app\modules\game\models\game_data\AttributesListCharacter;
use app\modules\game\models\game_data\Character;
use app\modules\game\models\game_data\Energy;
use app\modules\game\models\game_data\Home;
use app\modules\game\models\libraries\MastersLibrary;
use Codeception\Test\Unit;

class CharacterTest extends Unit
{
    public function testUnserializeEmpty()
    {
        $test_data = [];

        $char = new Character();
        $char->unserialize($test_data);

        expect($char->energy)->isInstanceOf(Energy::class);
        expect($char->attributes)->isInstanceOf(AttributesListCharacter::class);
        expect($char->attributes->strength)->isInstanceOf(StrengthMale::class);
        expect($char->home)->isInstanceOf(Home::class);
    }

    public function testUnserializeExist()
    {
        $test_data = [
            'name' => 'Yala',
            'energy' => [
                'value' => 5,
            ],
        ];

        $char = new Character();
        $char->unserialize($test_data);

        expect($char->energy)->isInstanceOf(Energy::class);
        expect($char->energy->value)->equals(5);
        expect($char->name)->equals('Yala');
    }

    public function testLoadFromMastersLibrary()
    {
        $char = new Character();
        $char->loadFromMastersLibrary('nerd');
        $char_data = MastersLibrary::loadCharacter('nerd');

        expect($char->attributes->strength)->isInstanceOf(StrengthMale::class);
        expect_that($char->attributes->strength->value == $char_data['attributes']['strength']);
        expect_that($char->skills->teacher->value == $char_data['skills']['teacher']);
    }
}
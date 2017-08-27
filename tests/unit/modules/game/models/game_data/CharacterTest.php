<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data;


use app\modules\game\models\game_data\attributes\StrengthMale;
use app\modules\game\models\game_data\Character;
use app\modules\game\models\game_data\Energy;
use Codeception\Test\Unit;

class CharacterTest extends Unit
{
    public function testUnserializeEmpty()
    {
        $test_data = [];

        $char = new Character();
        $char->unserialize($test_data);

        expect($char->energy)->isInstanceOf(Energy::class);
        expect($char->strength)->isInstanceOf(StrengthMale::class);
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
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data\base;


use app\modules\game\models\game_data\attributes\ArenaFameFemale;
use Codeception\Test\Unit;

class BaseAttributeTest extends Unit
{
    public function testGetValue()
    {
        $a = new ArenaFameFemale();
        $a->_value = 5;
        expect($a->value)->equals(5);
    }

    public function testSetValue()
    {
        $a = new ArenaFameFemale();
        $a->value = 10;
        expect($a->value)->equals(5);
    }
}
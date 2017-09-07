<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data\body;


use app\modules\game\models\game_data\body\Vagina;
use Codeception\Test\Unit;

class VaginaTest extends Unit
{
    public function testGetImageId()
    {
        $v = new Vagina();
        $v->unserialize([
            'value' => 2,
        ]);

        expect($v->getImageId())->equals('pussy_l2');
    }

    public function testGetStatus()
    {
        $v = new Vagina();
        $v->unserialize([
            'value' => 2,
        ]);

        expect($v->getStatus())->equals($v->valueNames()[2]);
    }

    public function testGetStatusLesserFloat()
    {
        $v = new Vagina();
        $v->unserialize([
            'value' => 2.3,
        ]);

        expect($v->getStatus())->equals($v->valueNames()[2]);
    }

    public function testGetStatusHigherFloat()
    {
        $v = new Vagina();
        $v->unserialize([
            'value' => 2.8,
        ]);

        expect($v->getStatus())->equals($v->valueNames()[2]);
    }

    public function testGetStatusVirginityYes()
    {
        $v = new Vagina();
        $v->unserialize([
            'value' => 0,
        ]);

        expect($v->getStatusVirginity())->equals('Девственная плева');
    }

    public function testGetStatusVirginityNo()
    {
        $v = new Vagina();
        $v->unserialize([
            'value' => 1,
            'is_virgin' => false,
        ]);

        expect($v->getStatusVirginity())->equals('Разорванная плева');
    }

    public function testGetStatusVirginityRestored()
    {
        $v = new Vagina();
        $v->unserialize([
            'value' => 1,
        ]);

        expect($v->getStatusVirginity())->equals('Восстановленная плева');
    }
}
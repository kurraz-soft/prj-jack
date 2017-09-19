<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data\items;


use app\modules\game\models\game_data\Person;
use app\modules\game\models\game_data\items\Weapon;
use Codeception\Test\Unit;

class WeaponTest extends Unit
{
    public function testUnserialize()
    {
        $w = new Weapon();
        $w->unserialize([]);

        expect($w->id)->equals('fist');
        expect($w->name)->equals('Без оружия');
    }

    public function testWeaponApprentiseUnserialize()
    {
        $ap = new Person();
        $ap->unserialize([]);

        expect($ap->equipment->weapon)->isInstanceOf(Weapon::class);
        expect($ap->equipment->weapon->id)->equals('fist');
    }

    public function testWeaponLoad()
    {
        $ap = new Person();
        $ap->unserialize([]);

        expect($ap->equipment->weapon->name)->equals('Без оружия');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data\items;


use app\modules\game\models\game_data\Apprentice;
use app\modules\game\models\game_data\items\Weapon;
use Codeception\Test\Unit;

class WeaponTest extends Unit
{
    public function testUnserialize()
    {
        $w = new Weapon();
        $w->unserialize([]);

        expect($w->id)->equals('fist');
        expect($w->name)->equals('Кулак');
    }

    public function testWeaponApprentiseUnserialize()
    {
        $ap = new Apprentice();
        $ap->unserialize([]);

        expect($ap->equipment->weapon)->isInstanceOf(Weapon::class);
        expect($ap->equipment->weapon->id)->equals('fist');
    }

    public function testWeaponLoad()
    {
        $ap = new Apprentice();
        $ap->unserialize([]);

        expect($ap->equipment->weapon->name)->equals('Кулак');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data\body;


use app\modules\game\models\game_data\body\Anus;
use app\modules\game\models\game_data\body\ApprenticeBody;
use Codeception\Test\Unit;

class ApprenticeBodyTest extends Unit
{
    public function testGetDependency()
    {
        $body = new ApprenticeBody();
        $body->unserialize([]);

        $dep = $body->vagina->getDependency(Anus::class);
        expect($dep)->isInstanceOf(Anus::class);
    }
}
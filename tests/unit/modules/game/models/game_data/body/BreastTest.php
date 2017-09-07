<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data\body;


use app\modules\game\models\game_data\body\Breast;
use Codeception\Test\Unit;

class BreastTest extends Unit
{
    public function testGetStatus()
    {
        $breast = new Breast();
        $breast->unserialize([
            'value' => 1,
            'has_nipples_piercing' => false,
        ]);

        expect($breast->getStatus())->equals($breast->valueNames()[1]);
    }

    public function testGetStatusWithPiercing()
    {
        $breast = new Breast();
        $breast->unserialize([
            'value' => 1,
            'has_nipples_piercing' => true,
        ]);

        expect($breast->getStatus())->equals($breast->valueNames()[1] . ' c проколотыми сосками');
    }
}
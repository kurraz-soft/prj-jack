<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\helpers;


use app\modules\game\helpers\VarHelper;
use Codeception\Test\Unit;

class VarHelperTest extends Unit
{
    public function testGetNamespaceClasses()
    {
        $classes = VarHelper::getNamespaceClasses('app\modules\game\helpers');
        $files = scandir(\Yii::getAlias('@app/modules/game/helpers'));

        expect(count($classes))->equals(count($files) - 2);
    }
}
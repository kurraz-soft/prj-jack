<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\helpers;


use app\modules\game\helpers\AnnotationHelper;
use app\modules\game\models\game_data\Person;
use app\modules\game\models\game_data\ApprenticeManager;
use app\modules\game\models\game_data\attributes\MoodMale;
use app\modules\game\models\game_data\AttributesListCharacter;
use app\modules\game\models\game_data\Character;
use Codeception\Test\Unit;

class AnnotationHelperTest extends Unit
{
    public function testGetObjectPropertiesTypesOnCurrentNamespace()
    {
        $res = AnnotationHelper::getObjectPropertiesTypes(new Character(), \ReflectionProperty::IS_PUBLIC);

        expect_that(isset($res['attributes']));
        expect($res['attributes'])->equals(AttributesListCharacter::class);
    }

    public function testGetObjectPropertiesTypesOnOtherNamespace()
    {
        $res = AnnotationHelper::getObjectPropertiesTypes(new Character(), \ReflectionProperty::IS_PUBLIC);

        expect_that(isset($res['attributes']));
        expect($res['mood'])->equals(MoodMale::class);
    }

    public function testGetObjectPropertiesTypesWithArrayOfObjects()
    {
        $res = AnnotationHelper::getObjectPropertiesTypes(new ApprenticeManager(), \ReflectionProperty::IS_PUBLIC);

        expect($res['apprentices'])->equals(Person::class);
    }
}
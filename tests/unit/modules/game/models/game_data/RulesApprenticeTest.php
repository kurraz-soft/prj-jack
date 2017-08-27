<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data;


use app\modules\game\models\game_data\rules\Food;
use app\modules\game\models\game_data\rules\FoodValue;
use app\modules\game\models\game_data\RulesApprentice;
use Codeception\Test\Unit;

class RulesApprenticeTest extends Unit
{
    public function testUnserialize()
    {
        $data = [
            'rules' => [
                Food::class => [
                    'active' => true,
                ],
            ],
        ];

        $rules = new RulesApprentice();
        $rules->unserialize($data);

        expect($rules->rules[Food::class])->isInstanceOf(Food::class);
        expect($rules->rules[Food::class]->active)->equals(true);
        expect($rules->rules[FoodValue::class])->isInstanceOf(FoodValue::class);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameData;
use app\modules\game\models\game_data\base\BaseRule;
use app\modules\game\models\game_data\rules\Alarm;
use app\modules\game\models\game_data\rules\Animal;
use app\modules\game\models\game_data\rules\BeastMilker;
use app\modules\game\models\game_data\rules\Cook;
use app\modules\game\models\game_data\rules\Cumming;
use app\modules\game\models\game_data\rules\Defecation;
use app\modules\game\models\game_data\rules\Food;
use app\modules\game\models\game_data\rules\FoodValue;
use app\modules\game\models\game_data\rules\Forced;
use app\modules\game\models\game_data\rules\Maid;
use app\modules\game\models\game_data\rules\MasterName;
use app\modules\game\models\game_data\rules\Masturbation;
use app\modules\game\models\game_data\rules\Silence;
use app\modules\game\models\game_data\rules\Sleep;
use app\modules\game\models\game_data\rules\Toilet;
use app\modules\game\models\game_data\rules\Urinar;
use app\modules\game\models\game_data\rules\VBalls;
use app\modules\game\models\game_data\rules\Washer;

class RulesApprentice extends BaseGameData
{
    /**
     * @var BaseRule[]
     */
    public $rules = [];

    public function __construct()
    {
        $this->rules = [
            Alarm::class => new Alarm(),
            Animal::class => new Animal(),
            BeastMilker::class => new BeastMilker(),
            Cook::class => new Cook(),
            Cumming::class => new Cumming(),
            Defecation::class => new Defecation(),
            Food::class => new Food(),
            FoodValue::class => new FoodValue(),
            Forced::class => new Forced(),
            Maid::class => new Maid(),
            MasterName::class => new MasterName(),
            Masturbation::class => new Masturbation(),
            Silence::class => new Silence(),
            Sleep::class => new Sleep(),
            Toilet::class => new Toilet(),
            Urinar::class => new Urinar(),
            VBalls::class => new VBalls(),
            Washer::class => new Washer(),
        ];
    }

    public function serialize()
    {
        $rules = [];

        foreach ($this->rules as $k => $rule)
        {
            $rules[$k] = $rule->serialize();
        }

        return [
            'rules' => $rules,
        ];
    }

    public function unserialize($serialized_data)
    {
        if(isset($serialized_data['rules']))
        {
            foreach ($this->rules as $type => $rule)
            {
                if(isset($serialized_data['rules'][$type]))
                {
                    $rule->unserialize($serialized_data['rules'][$type]);
                }
            }
        }
    }
}
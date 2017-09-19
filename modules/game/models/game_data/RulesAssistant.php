<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\base\TAutoSerializablePublicProperties;
use app\modules\game\models\game_data\rules\Alarm;
use app\modules\game\models\game_data\rules\ApprenticeWasher;
use app\modules\game\models\game_data\rules\BeastMilker;
use app\modules\game\models\game_data\rules\Cook;
use app\modules\game\models\game_data\rules\Food;
use app\modules\game\models\game_data\rules\Maid;
use app\modules\game\models\game_data\rules\MasterWasher;
use app\modules\game\models\game_data\rules\Sleep;
use app\modules\game\models\game_data\rules\Supervisor;
use yii\base\Exception;

class RulesAssistant extends BaseGameDataList
{
    use TAutoSerializablePublicProperties;

    /**
     * @var MasterWasher
     */
    public $master_washer;
    /**
     * @var Cook
     */
    public $cook;
    /**
     * @var BeastMilker
     */
    public $beast_milker;
    /**
     * @var Maid
     */
    public $maid;
    /**
     * @var ApprenticeWasher
     */
    public $apprentice_washer;
    /**
     * @var Supervisor
     */
    public $supervisor;
    /**
     * @var Alarm
     */
    public $alarm;
    /**
     * @var Sleep
     */
    public $sleep;
    /**
     * @var Food
     */
    public $food;

    public function setRuleValue($rule_id, $value)
    {
        $name = $rule_id;
        if(!isset($this->$name)) throw new Exception("wrong rule id");
        $this->$name->setValue($value);
    }

    public function toggleRuleValue($rule_id)
    {
        $name = $rule_id;
        if(!isset($this->$name)) throw new Exception("wrong rule id");

        $rule = $this->$name;

        $value = $rule->getValue();
        $rule->setValue(!$value);
    }
}
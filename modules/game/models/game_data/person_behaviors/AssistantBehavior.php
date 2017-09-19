<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\person_behaviors;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\base\TAutoSerializablePublicProperties;
use app\modules\game\models\game_data\RulesAssistant;

class AssistantBehavior extends BaseGameDataList
{
    use TAutoSerializablePublicProperties;

    /**
     * @var RulesAssistant
     */
    public $rules;
}
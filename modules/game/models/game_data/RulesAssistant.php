<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\base\TAutoSerializablePublicProperties;
use app\modules\game\models\game_data\rules\MasterWasher;

class RulesAssistant extends BaseGameDataList
{
    use TAutoSerializablePublicProperties;

    /**
     * @var MasterWasher
     */
    public $master_washer;
}
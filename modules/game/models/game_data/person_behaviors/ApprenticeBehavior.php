<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\person_behaviors;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\base\TAutoSerializablePublicProperties;
use app\modules\game\models\game_data\RulesApprentice;

class ApprenticeBehavior extends BaseGameDataList
{
    use TAutoSerializablePublicProperties;

    /**
     * @var RulesApprentice
     */
    public $rules;
}
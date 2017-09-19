<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\attributes\AgeFemale;
use app\modules\game\models\game_data\attributes\BehaviorFemale;
use app\modules\game\models\game_data\attributes\DescriptionsFemale;
use app\modules\game\models\game_data\attributes\MoodFemale;
use app\modules\game\models\game_data\attributes\VisualsFemale;
use app\modules\game\models\game_data\aura\Aura;
use app\modules\game\models\game_data\base\BaseGameData;
use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\base\IAutoSerializable;
use app\modules\game\models\game_data\base\TAutoSerializablePublicProperties;
use app\modules\game\models\game_data\body\ApprenticeBody;
use app\modules\game\models\game_data\person_behaviors\ApprenticeBehavior;
use app\modules\game\models\game_data\person_behaviors\AssistantBehavior;
use app\modules\game\models\game_data\serializators\AutoSerializator;
use app\modules\game\models\game_data\traits\TraitManager;

class Person extends BaseGameDataList
{
    use TAutoSerializablePublicProperties;

    /**
     * @var string
     */
    public $name;
    /**
     * @var AgeFemale
     */
    public $age;
    /**
     * @var int
     * days owned counter
     */
    public $days_owned = 0;
    /**
     * @var string
     */
    public $world_id;
    /**
     * @var string
     */
    public $template_id;
    /**
     * @var string
     */
    public $family_origin_id;
    /**
     * @var string
     */
    public $occupation_id;
    /**
     * @var RankApprentice
     */
    public $rank;
    /**
     * @var Energy
     */
    public $energy;
    /**
     * @var AttributesListApprentice
     */
    public $attributes;
    /**
     * @var SkillListApprentice
     */
    public $skills;
    /**
     * @var SkillSexListApprentice
     */
    public $skillsSex;
    /**
     * @var MoodFemale
     */
    public $mood;
    /**
     * @var BehaviorFemale
     */
    public $behavior;
    /**
     * @var Aura
     */
    public $aura;
    /**
     * @var ApprenticeBody
     */
    public $body;
    /**
     * @var DescriptionsFemale
     */
    public $descriptions;
    /**
     * @var VisualsFemale
     */
    public $visuals;
    /**
     * @var TraitManager
     */
    public $traits;
    /**
     * @var ApprenticeEquipment
     */
    public $equipment;

    /**
     * @var ApprenticeBehavior
     */
    public $apprenticeBehavior;

    /**
     * @var AssistantBehavior
     */
    public $assistantBehavior;
}

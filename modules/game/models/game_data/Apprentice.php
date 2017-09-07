<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\attributes\AgeFemale;
use app\modules\game\models\game_data\attributes\DescriptionsFemale;
use app\modules\game\models\game_data\attributes\MoodFemale;
use app\modules\game\models\game_data\aura\Aura;
use app\modules\game\models\game_data\base\BaseGameData;
use app\modules\game\models\game_data\base\IAutoSerializable;
use app\modules\game\models\game_data\body\ApprenticeBody;
use app\modules\game\models\game_data\serializators\AutoSerializator;

class Apprentice extends BaseGameData implements IAutoSerializable
{
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
     * @var RulesApprentice
     */
    public $rules;
    /**
     * @var MoodFemale
     */
    public $mood;
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

    private $_serializator;

    public function __construct()
    {
        $this->_serializator = new AutoSerializator($this);

        foreach ($this->serializableParams() as $name => $class)
        {
            if(class_exists($class))
            {
                $this->$name = new $class();
            }
        }
    }

    public function serializableParams()
    {
        return [
            'name' => '',
            'days_owned' => '',
            'age' => AgeFemale::class,
            'rules' => RulesApprentice::class,
            'energy' => Energy::class,
            'rank' => RankApprentice::class,
            'mood' => MoodFemale::class,
            'attributes' => AttributesListApprentice::class,
            'skills' => SkillListApprentice::class,
            'skillsSex' => SkillSexListApprentice::class,
            'aura' => Aura::class,
            'body' => ApprenticeBody::class,
            'descriptions' => DescriptionsFemale::class,
        ];
    }

    public function serialize()
    {
        return $this->_serializator->serialize();
    }

    public function unserialize($serialized_data)
    {
        $this->_serializator->unserialize($serialized_data);
    }
}

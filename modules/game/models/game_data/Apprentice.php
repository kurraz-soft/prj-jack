<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\attributes\MoodFemale;
use app\modules\game\models\game_data\base\BaseGameData;

class Apprentice extends BaseGameData
{
    /**
     * @var string
     */
    public $name;
    public $age;

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

    private $_child_game_data = [
        'rules' => RulesApprentice::class,
        'energy' => Energy::class,
        'rank' => RankApprentice::class,
        'mood' => MoodFemale::class,
        'attributes' => AttributesListApprentice::class,
        'skills' => SkillListApprentice::class,
        'skillsSex' => SkillSexListApprentice::class,
    ];

    public function serialize()
    {
        $ret = [];

        foreach ($this->_child_game_data as $name => $class)
        {
            $ret[$name] = $this->$name->serialize();
        }

        return array_merge([
            'name' => $this->name,
            'age' => $this->age, //TODO to int
        ],$ret);
    }

    public function unserialize($serialized_data)
    {
        foreach ($this->_child_game_data as $name => $class)
        {
            $this->$name = new $class();
            if(isset($serialized_data[$name]))
            {
                $this->$name->unserialize($serialized_data[$name]);
            }
        }

        $this->name = $serialized_data['name'] ?? "";
        $this->age = $serialized_data['age'] ?? "";
    }
}

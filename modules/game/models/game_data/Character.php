<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\attributes\BeautyMale;
use app\modules\game\models\game_data\attributes\GuildRepo;
use app\modules\game\models\game_data\attributes\HealthMale;
use app\modules\game\models\game_data\attributes\HygieneMale;
use app\modules\game\models\game_data\attributes\Libido;
use app\modules\game\models\game_data\attributes\Lifestyle;
use app\modules\game\models\game_data\attributes\Mark;
use app\modules\game\models\game_data\attributes\MoodMale;
use app\modules\game\models\game_data\attributes\PersonalityMale;
use app\modules\game\models\game_data\attributes\StrengthMale;
use app\modules\game\models\game_data\base\BaseAttribute;
use app\modules\game\models\game_data\base\BaseGameData;
use app\modules\game\models\game_data\base\BaseSkill;

class Character extends BaseGameData
{
    const DEFAULT_AVATARS = [
        'butler',
        'doctor',
        'fighter',
        'granpa',
        'impressario',
        'nerd',
        'noble',
        'pimp',
        'teacher',
        'torturer',
        'vampire',
        'werwolf',
    ];

    /**
     * @var Energy
     */
    public $energy;
    /**
     * @var MoodMale
     */
    public $mood;
    /**
     * @var string
     */
    public $name = '';
    /**
     * @var string
     */
    public $avatar;
    /**
     * @var HealthMale
     */
    public $health;
    /**
     * @var StrengthMale
     */
    public $strength;
    /**
     * @var PersonalityMale
     */
    public $personality;
    /**
     * @var BeautyMale
     */
    public $beauty;
    /**
     * @var Libido
     */
    public $libido;
    /**
     * @var Mark
     */
    public $mark;
    /**
     * @var GuildRepo
     */
    public $guildRep;
    /**
     * @var Lifestyle
     */
    public $lifestyle;
    /**
     * @var HygieneMale
     */
    public $hygiene;

    /**
     * @var BaseAttribute[]
     */
    public $attributes;
    /**
     * @var BaseSkill[]
     */
    public $skills;
    /**
     * @var BaseSkill[]
     */
    public $skillsSex;

    public function __construct()
    {

    }

    public function serialize()
    {
        return [
            'name' => $this->name,
            'energy' => $this->energy->serialize(),
            'mood' => $this->mood->serialize(),
            'health' => $this->health->serialize(),
            'strength' => $this->strength->serialize(),
            'personality' => $this->personality->serialize(),
            'beauty' => $this->beauty->serialize(),
            'libido' => $this->libido->serialize(),
            'mark' => $this->mark->serialize(),
            'guildRep' => $this->guildRep->serialize(),
            'lifestyle' => $this->lifestyle->serialize(),
            'hygiene' => $this->hygiene->serialize(),
            'avatar' => $this->avatar,
        ];
    }

    public function unserialize($serialized_data)
    {
        $child_game_data = [
            'energy' => Energy::class,
            'mood' => MoodMale::class,
            'health' => HealthMale::class,
            'strength' => StrengthMale::class,
            'personality' => PersonalityMale::class,
            'beauty' => BeautyMale::class,
            'libido' => Libido::class,
            'mark' => Mark::class,
            'guildRep' => GuildRepo::class,
            'lifestyle' => Lifestyle::class,
            'hygiene' => HygieneMale::class,
        ];

        foreach ($child_game_data as $name => $class)
        {
            $this->$name = new $class();

            if(isset($serialized_data[$name]))
            {
                $this->$name->unserialize($serialized_data[$name]);
            }
        }

        if(isset($serialized_data['name']))
        {
            $this->name = $serialized_data['name'];
        }
        if(isset($serialized_data['avatar']))
        {
            $this->avatar = $serialized_data['avatar'];
        }
    }

    public function loadFromMastersLibrary($character_id)
    {
        $selected_char = null;

        $characters = json_decode(file_get_contents(\Yii::getAlias('@game/data/masters.json')), true);
        foreach ($characters as $character)
        {
            if($character['id'] == $character_id)
            {
                $selected_char = $character;
                break;
            }
        }

        $this->name = $selected_char['name'];
        $this->avatar = $selected_char['avatar'];
        //TODO init other
    }
}
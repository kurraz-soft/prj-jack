<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\attributes\ArenaFameFemale;
use app\modules\game\models\game_data\attributes\BeautyFemale;
use app\modules\game\models\game_data\attributes\ConstitutionFemale;
use app\modules\game\models\game_data\attributes\ExoticismFemale;
use app\modules\game\models\game_data\attributes\HealthFemale;
use app\modules\game\models\game_data\attributes\IntellectFemale;
use app\modules\game\models\game_data\attributes\MoodFemale;
use app\modules\game\models\game_data\attributes\PrideFemale;
use app\modules\game\models\game_data\attributes\SensualityFemale;
use app\modules\game\models\game_data\attributes\StyleFemale;
use app\modules\game\models\game_data\attributes\TemperamentFemale;
use app\modules\game\models\game_data\attributes\TemperFemale;
use app\modules\game\models\game_data\base\BaseAttribute;
use app\modules\game\models\game_data\base\BaseGameData;
use app\modules\game\models\game_data\base\BaseSkill;
use app\modules\game\models\game_data\skills\CookFemale;
use app\modules\game\models\game_data\skills\DancerFemale;
use app\modules\game\models\game_data\skills\EnchanterFemale;
use app\modules\game\models\game_data\skills\ExpressionFemale;
use app\modules\game\models\game_data\skills\GladiatorFemale;
use app\modules\game\models\game_data\skills\HorseFemale;
use app\modules\game\models\game_data\skills\MaidFemale;
use app\modules\game\models\game_data\skills\MedicMale;
use app\modules\game\models\game_data\skills\MusicFemale;
use app\modules\game\models\game_data\skills\Nurse;
use app\modules\game\models\game_data\skills\PetFemale;
use app\modules\game\models\game_data\skills\SecretaryFemale;
use app\modules\game\models\game_data\skills\VocalFemale;
use app\modules\game\models\game_data\skills_sex\DemonstrationFemale;
use app\modules\game\models\game_data\skills_sex\FetishFemale;
use app\modules\game\models\game_data\skills_sex\OralFemale;
use app\modules\game\models\game_data\skills_sex\OrgyFemale;
use app\modules\game\models\game_data\skills_sex\PenetrationFemale;
use app\modules\game\models\game_data\skills_sex\PettingFemale;
use app\modules\game\models\game_data\skills_sex\XenophilyFemale;

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
    ];

    public function __construct()
    {
        $this->attributes = [
            ArenaFameFemale::class => new ArenaFameFemale(),
            BeautyFemale::class => new BeautyFemale(),
            ConstitutionFemale::class => new ConstitutionFemale(),
            ExoticismFemale::class => new ExoticismFemale(),
            HealthFemale::class => new HealthFemale(),
            IntellectFemale::class => new IntellectFemale(),
            PrideFemale::class => new PrideFemale(),
            SensualityFemale::class => new SensualityFemale(),
            StyleFemale::class => new StyleFemale(),
            TemperamentFemale::class => new TemperamentFemale(),
            TemperFemale::class => new TemperFemale(),
        ];

        $this->skills = [
            CookFemale::class => new CookFemale(),
            DancerFemale::class => new DancerFemale(),
            EnchanterFemale::class => new EnchanterFemale(),
            ExpressionFemale::class => new ExpressionFemale(),
            GladiatorFemale::class => new GladiatorFemale(),
            HorseFemale::class => new HorseFemale(),
            MaidFemale::class => new MaidFemale(),
            MedicMale::class => new MedicMale(),
            MusicFemale::class => new MusicFemale(),
            Nurse::class => new Nurse(),
            PetFemale::class => new PetFemale(),
            SecretaryFemale::class => new SecretaryFemale(),
            VocalFemale::class => new VocalFemale(),
        ];

        $this->skillsSex = [
            DemonstrationFemale::class => new DemonstrationFemale(),
            FetishFemale::class => new FetishFemale(),
            OralFemale::class => new OralFemale(),
            OrgyFemale::class => new OrgyFemale(),
            PenetrationFemale::class => new PenetrationFemale(),
            PettingFemale::class => new PettingFemale(),
            XenophilyFemale::class => new XenophilyFemale(),
        ];
    }

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
            $this->$name = $serialized_data[$name] ?? new $class();
        }

        $this->name = $serialized_data['name'] ?? "";
        $this->age = $serialized_data['age'] ?? "";
    }
}

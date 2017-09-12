<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\attributes\MoodMale;
use app\modules\game\models\game_data\base\BaseGameData;
use app\modules\game\models\libraries\MastersLibrary;

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
     * @var Wallet
     */
    public $wallet;
    /**
     * @var string
     */
    public $name = '';
    /**
     * @var string
     */
    public $avatar;
    /**
     * @var AttributesListCharacter
     */
    public $attributes;
    /**
     * @var SkillListCharacter
     */
    public $skills;
    /**
     * @var SkillSexListCharacter
     */
    public $skillsSex;

    /**
     * Current character location
     * @var array
     */
    public $location_route;

    /**
     * @var Home
     */
    public $home;

    private $_child_game_data = [
        'energy' => Energy::class,
        'mood' => MoodMale::class,
        'wallet' => Wallet::class,
        'attributes' => AttributesListCharacter::class,
        'skills' => SkillListCharacter::class,
        'skillsSex' => SkillSexListCharacter::class,
        'home' => Home::class,
    ];

    public function __construct()
    {
        foreach ($this->_child_game_data as $name => $class)
        {
            $this->$name = new $class();
        }
    }

    public function serialize()
    {
        return [
            'name' => $this->name,
            'energy' => $this->energy->serialize(),
            'mood' => $this->mood->serialize(),
            'wallet' => $this->wallet->serialize(),
            'attributes' => $this->attributes->serialize(),
            'skills' => $this->skills->serialize(),
            'skillsSex' => $this->skillsSex->serialize(),
            'avatar' => $this->avatar,
            'location' => $this->location_route,
            'home' => $this->home->serialize(),
        ];
    }

    public function unserialize($serialized_data)
    {
        foreach ($this->_child_game_data as $name => $class)
        {
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
        if(!empty($serialized_data['location']))
        {
            $this->location_route = $serialized_data['location'];
        }else
        {
            $this->location_route = LocationManager::getStartLocationRoute();
        }
    }

    public function loadFromMastersLibrary($character_id)
    {
        $selected_char = null;

        $selected_char = MastersLibrary::loadCharacter($character_id);

        $this->name = $selected_char['name'];
        $this->avatar = $selected_char['avatar'];
        $this->energy->value = 5;
        $this->mood->value = 5;
        $this->wallet->add($selected_char['money']);

        $this->attributes->strength->value = $selected_char['attributes']['strength'];
        $this->attributes->health->value = 5;
        $this->attributes->lifestyle->value = 1;
        $this->attributes->guildRep->value = 1;
        $this->attributes->mark->value = 1;
        $this->attributes->libido->value = $selected_char['attributes']['libido'];
        $this->attributes->beauty->value = $selected_char['attributes']['beauty'];
        $this->attributes->personality->value = $selected_char['attributes']['personality'];
        $this->attributes->hygiene->value = 5;

        $this->skills->artdirector->value = $selected_char['skills']['artdirector'];
        $this->skills->bondage->value = $selected_char['skills']['bondage'];
        $this->skills->domination->value = $selected_char['skills']['domination'];
        $this->skills->fighter->value = $selected_char['skills']['fighter'];
        $this->skills->flagelation->value = $selected_char['skills']['flagelation'];
        $this->skills->mage->value = $selected_char['skills']['mage'];
        $this->skills->maid->value = $selected_char['skills']['maid'];
        $this->skills->teacher->value = $selected_char['skills']['teacher'];
        $this->skills->torture->value = $selected_char['skills']['torture'];

        $this->skillsSex->fetish->value = $selected_char['skills_sex']['fetish'];
        $this->skillsSex->oral->value = $selected_char['skills_sex']['oral'];
        $this->skillsSex->penetration->value = $selected_char['skills_sex']['penetration'];
        $this->skillsSex->petting->value = $selected_char['skills_sex']['petting'];
    }
}
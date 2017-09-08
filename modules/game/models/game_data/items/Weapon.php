<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\items;


use app\modules\game\models\game_data\base\BaseItem;
use app\modules\game\models\libraries\WeaponsLibrary;

class Weapon extends BaseItem
{
    const DAMAGE_TYPE_CRUSHING = "crush";
    const DAMAGE_TYPE_PIERCING = "piercing";
    const DAMAGE_TYPE_CHOPPING = "chop"; //Рубящий
    const DAMAGE_TYPE_ICE = "ice";
    const DAMAGE_TYPE_FILE = "fire";
    const DAMAGE_TYPE_LIGHTNING = "lightning";

    const TYPE_UNARMED = "unarmed";
    const TYPE_LIGHT = 'light';

    const ATTACK_TYPE_ACCURATE = "accurate";
    const ATTACK_TYPE_QUICK = "quick";
    const ATTACK_TYPE_STRONG = "strong";

    public $damageAttribute;
    public $damageBonus;
    public $damageType;
    public $type;
    public $attacks;
    public $keywords;

    public function __construct()
    {
        parent::__construct();
        if(!$this->id) $this->id = $this->getDefaultId();
    }

    public function loadFromLibrary()
    {
        if(!$this->id) $this->id = $this->getDefaultId();
        WeaponsLibrary::fillWeaponObject($this, WeaponsLibrary::findById($this->id));
    }

    public function getDefaultId()
    {
        return 'fist';
    }
}
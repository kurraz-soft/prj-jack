<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\items\Armor;
use app\modules\game\models\game_data\items\OutfitBody;
use app\modules\game\models\game_data\items\OutfitClit;
use app\modules\game\models\game_data\items\OutfitEars;
use app\modules\game\models\game_data\items\OutfitHands;
use app\modules\game\models\game_data\items\OutfitHead;
use app\modules\game\models\game_data\items\OutfitLegs;
use app\modules\game\models\game_data\items\OutfitNavel;
use app\modules\game\models\game_data\items\OutfitNeck;
use app\modules\game\models\game_data\items\OutfitNipples;
use app\modules\game\models\game_data\items\OutfitRing;
use app\modules\game\models\game_data\items\OutfitTongue;
use app\modules\game\models\game_data\items\Weapon;

class ApprenticeEquipment extends BaseGameDataList
{
    /**
     * @var Weapon
     */
    public $weapon;
    /**
     * @var Weapon
     */
    public $weaponSecond;
    /**
     * @var Armor
     */
    public $armor;
    /**
     * @var Weapon
     */
    public $weaponBack;
    /**
     * @var Weapon
     */
    public $weaponLeft;
    /**
     * @var Weapon
     */
    public $weaponRight;
    /**
     * @var Weapon
     */
    public $weaponArm;
    /**
     * @var Weapon
     */
    public $weaponLeg;

    /**
     * @var OutfitBody
     */
    public $cloth;
    /**
     * @var OutfitHead
     */
    public $head;
    /**
     * @var OutfitEars
     */
    public $ears;
    /**
     * @var OutfitNeck
     */
    public $neck;
    /**
     * @var OutfitHands
     */
    public $hands;
    /**
     * @var OutfitNipples
     */
    public $nipples;
    /**
     * @var OutfitClit
     */
    public $clit;
    /**
     * @var OutfitLegs
     */
    public $legs;
    /**
     * @var OutfitRing
     */
    public $ringLeft;
    /**
     * @var OutfitRing
     */
    public $ringRight;
    /**
     * @var OutfitNavel
     */
    public $navel; //Пупок
    /**
     * @var OutfitTongue
     */
    public $tongue;

    public function serializableParams()
    {
        return [
            'weapon' => Weapon::class,
            'weaponSecond' => Weapon::class,
            'armor' => Armor::class,
            'weaponBack' => Weapon::class,
            'weaponLeft' => Weapon::class,
            'weaponRight' => Weapon::class,
            'weaponArm' => Weapon::class,
            'weaponLeg' => Weapon::class,
            'cloth' => OutfitBody::class,
            'head' => OutfitHead::class,
            'ears' => OutfitEars::class,
            'neck' => OutfitNeck::class,
            'hands' => OutfitHands::class,
            'nipples' => OutfitNipples::class,
            'clit' => OutfitClit::class,
            'legs' => OutfitLegs::class,
            'ringLeft' => OutfitRing::class,
            'ringRight' => OutfitRing::class,
            'navel' => OutfitNavel::class,
            'tongue' => OutfitTongue::class,
        ];
    }
}
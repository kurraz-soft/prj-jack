<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\aura;


use app\modules\game\models\game_data\base\BaseGameDataList;

/**
 * Class Aura
 * @package app\modules\game\models\game_data\aura
 *
 */
class Aura extends BaseGameDataList
{
    /**
     * @var Obedience
     */
    public $obedience;
    /**
     * @var Lust
     */
    public $lust;
    /**
     * @var Fear
     */
    public $fear;
    /**
     * @var Desperation
     */
    public $desperation; //angst
    /**
     * @var Awareness
     */
    public $awareness; //rational
    /**
     * @var Taming
     */
    public $taming; //instinct
    /**
     * @var Habit
     */
    public $habit; //custom
    /**
     * @var Corruption
     */
    public $corruption; //spoil
    /**
     * @var Loyalty
     */
    public $loyalty; //moral

    /**
     * @var Power
     */
    public $power; //supremacy

    public function serializableParams()
    {
        return [
            'obedience' => Obedience::class,
            'lust' => Lust::class,
            'fear' => Fear::class,
            'desperation' => Desperation::class,
            'awareness' => Awareness::class,
            'taming' => Taming::class,
            'habit' => Habit::class,
            'corruption' => Corruption::class,
            'loyalty' => Loyalty::class,
            'power' => Power::class,
        ];
    }
}
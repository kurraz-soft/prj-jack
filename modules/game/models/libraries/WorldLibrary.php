<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\libraries;


use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\game_data\worlds\BarbarianWorld;
use app\modules\game\models\game_data\worlds\CyberpunkWorld;
use app\modules\game\models\game_data\worlds\DarkFantasyWorld;
use app\modules\game\models\game_data\worlds\DarkFutureWorld;
use app\modules\game\models\game_data\worlds\HighFantasyWorld;
use app\modules\game\models\game_data\worlds\IndustrialWorld;
use app\modules\game\models\game_data\worlds\MedievalWorld;
use app\modules\game\models\game_data\worlds\ModernWorld;
use app\modules\game\models\game_data\worlds\PrehistoricWorld;
use app\modules\game\models\game_data\worlds\SnsWorld;
use app\modules\game\models\game_data\worlds\SpaceWorld;
use app\modules\game\models\game_data\worlds\SteampunkWorld;
use app\modules\game\models\game_data\worlds\UtopiaWorld;
use yii\base\Exception;

class WorldLibrary
{
    const PREHISTORIC = 'prehistoric';
    const BARBARIAN = 'barbarian';
    const SNS = 'sns'; //мир меча и магии
    const MEDIEVAL = 'medieval';
    const DARKFANTASY = 'darkfantasy';
    const HIGHFANTASY = 'highfantasy';
    const STEAMPUNK = 'steampunk';
    const INDUSTRIAL = 'industrial';
    const MODERN = 'modern';
    const CYBERPUNK = 'cyberpunk';
    const UTOPIA = 'utopia';
    const DARKFUTURE = 'darkfuture';
    const SPACE = 'space';

    const WORLD_RANDOM_WEIGHTS = [
        self::PREHISTORIC => 1,
        self::BARBARIAN => 1,
        self::SNS => 1,
        self::MEDIEVAL => 1,
        self::DARKFANTASY => 1,
        self::HIGHFANTASY => 1,
        self::STEAMPUNK => 1,
        self::INDUSTRIAL => 3,
        self::MODERN => 2,
        self::CYBERPUNK => 2,
        self::UTOPIA => 1,
        self::DARKFUTURE => 1,
        self::SPACE => 2,
    ];

    const WORLD_TO_CLASS = [
        self::PREHISTORIC => PrehistoricWorld::class,
        self::BARBARIAN => BarbarianWorld::class,
        self::SNS => SnsWorld::class,
        self::MEDIEVAL => MedievalWorld::class,
        self::DARKFANTASY => DarkFantasyWorld::class,
        self::HIGHFANTASY => HighFantasyWorld::class,
        self::STEAMPUNK => SteampunkWorld::class,
        self::INDUSTRIAL => IndustrialWorld::class,
        self::MODERN => ModernWorld::class,
        self::CYBERPUNK => CyberpunkWorld::class,
        self::UTOPIA => UtopiaWorld::class,
        self::DARKFUTURE => DarkFutureWorld::class,
        self::SPACE => SpaceWorld::class,
    ];

    /**
     * @return string
     * @throws Exception
     */
    public static function getRandomWorldId()
    {
        $world_id = self::PREHISTORIC;

        $weights_sum = array_sum(self::WORLD_RANDOM_WEIGHTS);
        $world_weights = [];
        $prev_weight = 0;
        foreach (self::WORLD_RANDOM_WEIGHTS as $world => $weight)
        {
            $world_weights[$world] = ($weight / (float)$weights_sum) * 100 + $prev_weight;
            $prev_weight = $world_weights[$world];
        }
        $rand = mt_rand(0,100);
        foreach ($world_weights as $world => $weight)
        {
            if($rand <= $weight)
            {
                $world_id = $world;
                break;
            }
        }

        return $world_id;
    }

    /**
     * @param string $world_id
     * @return IWorld
     * @throws Exception
     */
    public static function factory($world_id)
    {
        $world_class = static::WORLD_TO_CLASS[$world_id] ?? "";
        if(!$world_class) throw new Exception("Can't find world class");

        return new $world_class();
    }
}
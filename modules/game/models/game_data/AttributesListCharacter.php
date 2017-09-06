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
use app\modules\game\models\game_data\attributes\PersonalityMale;
use app\modules\game\models\game_data\attributes\StrengthMale;
use app\modules\game\models\game_data\base\BaseGameDataList;

/**
 * Class AttributesListCharacter
 * @package app\modules\game\models\game_data
 *
 * @property HealthMale $health
 * @property StrengthMale $strength
 * @property PersonalityMale $personality
 * @property BeautyMale $beauty
 * @property Libido $libido
 * @property Mark $mark
 * @property GuildRepo $guildRep
 * @property Lifestyle $lifestyle
 * @property HygieneMale $hygiene
 */
class AttributesListCharacter extends BaseGameDataList
{
    public function serializableParams()
    {
        return [
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
    }
}
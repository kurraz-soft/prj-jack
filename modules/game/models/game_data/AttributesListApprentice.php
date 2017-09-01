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
use app\modules\game\models\game_data\attributes\PrideFemale;
use app\modules\game\models\game_data\attributes\SensualityFemale;
use app\modules\game\models\game_data\attributes\StyleFemale;
use app\modules\game\models\game_data\attributes\TemperamentFemale;
use app\modules\game\models\game_data\attributes\TemperFemale;
use app\modules\game\models\game_data\base\BaseGameDataList;

/**
 * Class AttributesListApprentice
 * @package app\modules\game\models\game_data
 *
 * @property ArenaFameFemale $arenaFame
 * @property BeautyFemale $beauty
 * @property ConstitutionFemale $constitution
 * @property ExoticismFemale $exoticism
 * @property HealthFemale $health
 * @property IntellectFemale $intellect
 * @property PrideFemale $pride
 * @property SensualityFemale $sensuality
 * @property StyleFemale $style
 * @property TemperamentFemale $temperament
 * @property TemperFemale $temper
 */
class AttributesListApprentice extends BaseGameDataList
{
    protected $_child_game_data = [
        'arenaFame' => ArenaFameFemale::class,
        'beauty' => BeautyFemale::class,
        'constitution' => ConstitutionFemale::class,
        'exoticism' => ExoticismFemale::class,
        'health' => HealthFemale::class,
        'intellect' => IntellectFemale::class,
        'pride' => PrideFemale::class,
        'sensuality' => SensualityFemale::class,
        'style' => StyleFemale::class,
        'temperament' => TemperamentFemale::class,
        'temper' => TemperFemale::class,
    ];
}
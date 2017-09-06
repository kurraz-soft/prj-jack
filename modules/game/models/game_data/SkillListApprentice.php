<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\skills\CookFemale;
use app\modules\game\models\game_data\skills\DancerFemale;
use app\modules\game\models\game_data\skills\EnchanterFemale;
use app\modules\game\models\game_data\skills\ExpressionFemale;
use app\modules\game\models\game_data\skills\GladiatorFemale;
use app\modules\game\models\game_data\skills\HorseFemale;
use app\modules\game\models\game_data\skills\MaidFemale;
use app\modules\game\models\game_data\skills\Nurse;
use app\modules\game\models\game_data\skills\PetFemale;
use app\modules\game\models\game_data\skills\SecretaryFemale;
use app\modules\game\models\game_data\skills\VocalFemale;

/**
 * Class SkillListApprentice
 * @package app\modules\game\models\game_data
 *
 * @property CookFemale $cook
 * @property DancerFemale $dancer
 * @property EnchanterFemale $enchanter
 * @property ExpressionFemale $expression
 * @property GladiatorFemale $gladiator
 * @property HorseFemale $horse
 * @property MaidFemale $maid
 * @property Nurse $nurse
 * @property PetFemale $pet
 * @property SecretaryFemale $secretary
 * @property VocalFemale $vocal
 */
class SkillListApprentice extends BaseGameDataList
{
    public function serializableParams()
    {
        return [
            'cook' => CookFemale::class,
            'dancer' => DancerFemale::class,
            'enchanter' => EnchanterFemale::class,
            'expression' => ExpressionFemale::class,
            'gladiator' => GladiatorFemale::class,
            'horse' => HorseFemale::class,
            'maid' => MaidFemale::class,
            'nurse' => Nurse::class,
            'pet' => PetFemale::class,
            'secretary' => SecretaryFemale::class,
            'vocal' => VocalFemale::class,
        ];
    }
}
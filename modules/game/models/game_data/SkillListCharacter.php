<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\skills\ArtdirectorMale;
use app\modules\game\models\game_data\skills\BondageMale;
use app\modules\game\models\game_data\skills\DominationMale;
use app\modules\game\models\game_data\skills\FighterMale;
use app\modules\game\models\game_data\skills\FlagelationMale;
use app\modules\game\models\game_data\skills\MageMale;
use app\modules\game\models\game_data\skills\MaidMale;
use app\modules\game\models\game_data\skills\TeacherMale;
use app\modules\game\models\game_data\skills\TortureMale;

/**
 * Class SkillListCharacter
 * @package app\modules\game\models\game_data
 *
 * @property ArtdirectorMale $artdirector
 * @property BondageMale $bondage
 * @property DominationMale $domination
 * @property FighterMale $fighter
 * @property FlagelationMale $flagelation
 * @property MageMale $mage
 * @property MaidMale $maid
 * @property TeacherMale $teacher
 * @property TortureMale $torture
 */
class SkillListCharacter extends BaseGameDataList
{
    protected $_child_game_data = [
        'artdirector' => ArtdirectorMale::class,
        'bondage' => BondageMale::class,
        'domination' => DominationMale::class,
        'fighter' => FighterMale::class,
        'flagelation' => FighterMale::class,
        'mage' => MageMale::class,
        'maid' => MaidMale::class,
        'teacher' => TeacherMale::class,
        'torture' => TortureMale::class,
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\skills_sex\FetishMale;
use app\modules\game\models\game_data\skills_sex\OralMale;
use app\modules\game\models\game_data\skills_sex\PenetrationMale;
use app\modules\game\models\game_data\skills_sex\PettingMale;

/**
 * Class SkillSexListCharacter
 * @package app\modules\game\models\game_data
 *
 * @property FetishMale $fetish
 * @property OralMale $oral
 * @property PenetrationMale $penetration
 * @property PettingMale $petting
 */
class SkillSexListCharacter extends BaseGameDataList
{
    protected $_child_game_data = [
        'fetish' => FetishMale::class,
        'oral' => OralMale::class,
        'penetration' => PenetrationMale::class,
        'petting' => PettingMale::class,
    ];
}
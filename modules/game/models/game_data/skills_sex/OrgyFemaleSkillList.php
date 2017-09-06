<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\skills_sex\sub_skills\Bukkake;
use app\modules\game\models\game_data\skills_sex\sub_skills\Dp;
use app\modules\game\models\game_data\skills_sex\sub_skills\Gangbang;
use app\modules\game\models\game_data\skills_sex\sub_skills\Threesome;
use app\modules\game\models\game_data\skills_sex\sub_skills\Tp;

/**
 * Class OrgyFemaleSkillList
 * @package app\modules\game\models\game_data\skills_sex
 *
 * @property Threesome $threesome
 * @property Dp $dp
 * @property Tp $tp
 * @property Gangbang $gangbang
 * @property Bukkake $bukkake
 */
class OrgyFemaleSkillList extends BaseGameDataList
{
    public function serializableParams()
    {
        return [
            'threesome' => Threesome::class,
            'dp' => Dp::class,
            'tp' => Tp::class,
            'gangbang' => Gangbang::class,
            'bukkake' => Bukkake::class,
        ];
    }
}
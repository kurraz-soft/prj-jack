<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\skills_sex\sub_skills\Beast;
use app\modules\game\models\game_data\skills_sex\sub_skills\Dog;
use app\modules\game\models\game_data\skills_sex\sub_skills\Horse;
use app\modules\game\models\game_data\skills_sex\sub_skills\Spider;
use app\modules\game\models\game_data\skills_sex\sub_skills\Svine;
use app\modules\game\models\game_data\skills_sex\sub_skills\TentacleSea;

/**
 * Class XenophilyFemaleSubSkillList
 * @package app\modules\game\models\game_data\skills_sex
 *
 * @property Dog $dog
 * @property Svine $svine
 * @property Horse $horse
 * @property Beast $beast
 * @property Spider $spider
 * @property TentacleSea $tentacleSea
 */
class XenophilyFemaleSubSkillList extends BaseGameDataList
{
    public function serializableParams()
    {
        return [
            'dog' => Dog::class,
            'svine' => Svine::class,
            'horse' => Horse::class,
            'beast' => Beast::class,
            'spider' => Spider::class,
            'tentacleSea' => TentacleSea::class,
        ];
    }
}
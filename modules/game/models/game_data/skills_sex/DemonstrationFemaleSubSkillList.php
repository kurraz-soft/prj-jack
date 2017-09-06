<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\skills_sex\sub_skills\Dildo;
use app\modules\game\models\game_data\skills_sex\sub_skills\Exhibit;
use app\modules\game\models\game_data\skills_sex\sub_skills\Humiliation;
use app\modules\game\models\game_data\skills_sex\sub_skills\Masturbation;
use app\modules\game\models\game_data\skills_sex\sub_skills\Seduce;

/**
 * Class DemonstrationFemaleSubSkillList
 * @package app\modules\game\models\game_data\skills_sex
 *
 * @property Seduce $seduce
 * @property Masturbation $masturbation
 * @property Dildo $dildo
 * @property Exhibit $exhibit
 * @property Humiliation $humiliation
 */
class DemonstrationFemaleSubSkillList extends BaseGameDataList
{
    public function serializableParams()
    {
        return [
            'seduce' => Seduce::class,
            'masturbation' => Masturbation::class,
            'dildo' => Dildo::class,
            'exhibit' => Exhibit::class,
            'humiliation' => Humiliation::class,
        ];
    }
}
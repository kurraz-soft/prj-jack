<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data;


use app\modules\game\models\game_data\Apprentice;
use app\modules\game\models\game_data\attributes\HealthFemale;
use app\modules\game\models\game_data\aura\Obedience;
use app\modules\game\models\game_data\body\Breast;
use app\modules\game\models\game_data\skills\MaidFemale;
use app\modules\game\models\game_data\skills_sex\PettingFemale;
use app\modules\game\models\game_data\skills_sex\PettingFemaleSubSkillList;
use app\modules\game\models\game_data\skills_sex\sub_skills\Hj;
use app\modules\game\models\game_data\traits\Scars;
use Codeception\Test\Unit;

class ApprenticeTest extends Unit
{
    public function testUnserializeEmpty()
    {
        $test_data = [];

        $ap = new Apprentice();
        $ap->unserialize($test_data);

        expect($ap->attributes->health)->isInstanceOf(HealthFemale::class);
        expect($ap->skills->maid)->isInstanceOf(MaidFemale::class);
        expect($ap->skillsSex->petting)->isInstanceOf(PettingFemale::class);
        expect($ap->skillsSex->petting->subSkills)->isInstanceOf(PettingFemaleSubSkillList::class);
        expect($ap->skillsSex->petting->subSkills->hj)->isInstanceOf(Hj::class);
        expect($ap->aura->obedience)->isInstanceOf(Obedience::class);
        expect($ap->body->breast)->isInstanceOf(Breast::class);
    }

    public function testTraitsNew()
    {
        $ap = new Apprentice();
        $ap->unserialize([
            'attributes' => [
                'beauty' => [
                    'value' => 4,
                ],
            ],
        ]);

        expect($ap->attributes->beauty->value)->equals(4);
        $ap->traits->attach(new Scars());
        expect($ap->attributes->beauty->value)->equals(2);
        $ap->traits->detach(Scars::class);
        expect($ap->attributes->beauty->value)->equals(4);
    }

    public function testTraitsExist()
    {
        $ap = new Apprentice();
        $ap->unserialize([
            'attributes' => [
                'beauty' => [
                    'value' => 4,
                ],
            ],
            'traits' => [
                'traitClasses' => [
                    Scars::class,
                ]
            ],
        ]);

        expect($ap->attributes->beauty->value)->equals(4);
        $ap->traits->detach(Scars::class);
        expect($ap->attributes->beauty->value)->equals(5); //max 5
    }
}
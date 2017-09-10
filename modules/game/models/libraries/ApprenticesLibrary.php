<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\libraries;


use app\modules\game\helpers\RandomHelper;
use app\modules\game\helpers\VarHelper;
use app\modules\game\models\game_data\Apprentice;
use app\modules\game\models\game_data\attributes\AgeFemale;
use app\modules\game\models\game_data\traits\AbuseAttitude;
use app\modules\game\models\game_data\traits\BloodAttitude;
use app\modules\game\models\game_data\traits\Bruises;
use app\modules\game\models\game_data\traits\Compassion;
use app\modules\game\models\game_data\traits\CookAffinity;
use app\modules\game\models\game_data\traits\Courage;
use app\modules\game\models\game_data\traits\DanceAffinity;
use app\modules\game\models\game_data\traits\DressageAffinity;
use app\modules\game\models\game_data\traits\EnchanterAffinity;
use app\modules\game\models\game_data\traits\Exhibitionism;
use app\modules\game\models\game_data\traits\ExpressionAffinity;
use app\modules\game\models\game_data\traits\GladiatorAffinity;
use app\modules\game\models\game_data\traits\Grace;
use app\modules\game\models\game_data\traits\Homosexualism;
use app\modules\game\models\game_data\traits\Illness;
use app\modules\game\models\game_data\traits\Masohism;
use app\modules\game\models\game_data\traits\Meekness;
use app\modules\game\models\game_data\traits\Memory;
use app\modules\game\models\game_data\traits\MusicAffinity;
use app\modules\game\models\game_data\traits\NurseAffinity;
use app\modules\game\models\game_data\traits\Nymphomania;
use app\modules\game\models\game_data\traits\Parasite;
use app\modules\game\models\game_data\traits\PassionSweets;
use app\modules\game\models\game_data\traits\Perversion;
use app\modules\game\models\game_data\traits\PetAffinity;
use app\modules\game\models\game_data\traits\Scars;
use app\modules\game\models\game_data\traits\SecretaryAffinity;
use app\modules\game\models\game_data\traits\Selfesteem;
use app\modules\game\models\game_data\traits\ServiceAffinity;
use app\modules\game\models\game_data\traits\SportAffinity;
use app\modules\game\models\game_data\traits\VocalAffinity;
use app\modules\game\models\game_data\traits\Voice;

class ApprenticesLibrary
{
    /**
     * @param $file_id
     * @return array
     */
    public static function load($file_id)
    {
        return json_decode(file_get_contents(\Yii::getAlias('@game/data/apprentices/'.$file_id.'.json')), true);
    }

    /**
     * @return array
     */
    public static function findAll()
    {
        $dir = opendir(\Yii::getAlias('@game/data/apprentices'));
        $file_ids = [];
        while(($file = readdir($dir)) !== false)
        {
            list($filename, $ext) = explode('.',$file);
            if($ext == 'php')
                $file_ids[] = $filename;
        }

        return $file_ids;
    }

    /**
     * @return string
     */
    public static function getRandomFileId()
    {
        $file_ids = static::findAll();

        return $file_ids[array_rand($file_ids)];
    }

    /**
     * @param $data
     * @return array
     */
    public static function fillUpLoadedData($data)
    {
        //TODO fill up empty json values

        $data['seed_world'] = VarHelper::existOrElse($data['seed_world'], WorldLibrary::getRandomWorldId());
        $world = WorldLibrary::factory($data['seed_world']);
        $data['seed_family'] = VarHelper::existOrElse($data['seed_family'], RandomHelper::randArrayValue($world->getAvailableFamilyOriginIds()));
        $family = FamilyOriginLibrary::factory($data['seed_family']);
        $data['seed_occupation'] = VarHelper::existOrElse($data['seed_occupation'], RandomHelper::randArrayValue($family->getAvailableOccupations()));
        $occupation = OccupationsLibrary::factory($data['seed_occupation']);

        $data['seed_name'] = VarHelper::existOrElse($data['seed_name'], NamesLibrary::getRandom($world->getNameBase()));
        $data['seed_age'] = VarHelper::existOrElse($data['seed_age'], mt_rand(1,AgeFemale::MATURE) - 1); //json age margin = 1
        $data['seed_beauty'] = VarHelper::existOrElse($data['seed_beauty'], mt_rand(1, 5));
        $data['seed_sensitivity'] = VarHelper::existOrElse($data['seed_sensitivity'], mt_rand(1,5));
        $data['seed_temper'] = VarHelper::existOrElse($data['seed_temper'], mt_rand(1,5));
        $data['seed_ego'] = VarHelper::existOrElse($data['seed_ego'], mt_rand(1,5));
        $data['seed_pride'] = VarHelper::existOrElse($data['seed_pride'], mt_rand(1,5));
        $data['seed_intellect'] = VarHelper::existOrElse($data['seed_intellect'], mt_rand(1,5));
        $data['seed_fat'] = VarHelper::existOrElse($data['seed_fat'], mt_rand(0,4));
        $data['seed_exotic'] = VarHelper::existOrElse($data['seed_exotic'], mt_rand(1,5));
        $data['seed_fame_rate'] = VarHelper::existOrElse($data['seed_fame_rate'], mt_rand(1,5));
        $data['seed_fertility'] = ($data['seed_age'] + 1) < AgeFemale::YOUNG ? 0 : RandomHelper::randFloat(1,2);
        $data['seed_fertility_revealed'] = 0;
        $data['seed_stamina'] = VarHelper::existOrElse($data['seed_stamina'], mt_rand(1,5));
        $data['seed_metabolism'] = VarHelper::existOrElse($data['seed_metabolism'], 3);

                //Aura
        $data['seed_custom'];
        $data['seed_moral'];
        $data['seed_instinct'];
        $data['seed_awareness'];
        $data['seed_obedience'];
        $data['seed_lust'];
        $data['seed_fear'];
        $data['seed_angst'];

                //Skills
        $data['seed_expression'];
        $data['seed_pet'];
        $data['seed_dressage'];
        $data['seed_nurse'];
        $data['seed_service'];
        $data['seed_cook'];
        $data['seed_gladiatrix'];
        $data['seed_enchanter'];
        $data['seed_vocal'];
        $data['seed_music'];
        $data['seed_callisthenics'];
        $data['seed_secretary'];

        //Body
        $data['seed_boobs'];

        //Virginity
        if(!VarHelper::exist($data['seed_virginity']))
        {
            if(!$data['seed_virginity'] && ($data['seed_age'] + 1) == AgeFemale::LOLI)
            {
                $data['seed_virginity'] = RandomHelper::randChooseVar(0,1, 80);
            }
            if(!$data['seed_virginity'] && ($data['seed_age'] + 1) == AgeFemale::YOUNG)
            {
                $data['seed_virginity'] = RandomHelper::randChooseVar(0,1, 50);
            }
            if(!$data['seed_virginity'] && ($data['seed_age'] + 1) == AgeFemale::MATURE)
            {
                $data['seed_virginity'] = RandomHelper::randChooseVar(0,1, 20);
            }
        }

        //SkillsSex

        if(($data['seed_age'] + 1) == AgeFemale::YOUNG)
        {
            $bonus = RandomHelper::randChooseVar(1, 0, 25);
            $data['seed_sub_anal'] = VarHelper::existOrElse($data['seed_sub_anal'], 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 33);
            $data['seed_sub_bj'] = VarHelper::existOrElse($data['seed_sub_bj'], 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 50);
            $data['seed_sub_masturbation'] = VarHelper::existOrElse($data['seed_sub_masturbation'], 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 33);
            $data['seed_sub_masturbation'] = VarHelper::existOrElse($data['seed_sub_masturbation'], 0) + $bonus;

            if(RandomHelper::randChooseVar(1,0,25))
            {
                $data['seed_virginity'] = 1;
                $data['seed_sub_hug'] += 1;
                $data['seed_sub_kiss'] += 1;
                $data['seed_sub_vaginal'] += 1;
                $data['seed_sub_anal'] += RandomHelper::randChooseVar(1, 0, 33);
                $data['seed_sub_bj'] += RandomHelper::randChooseVar(1, 0, 33);
            }
        }

        if(($data['seed_age'] + 1) == AgeFemale::MATURE)
        {
            $bonus = 1;
            $data['seed_sub_hug'] = VarHelper::existOrElse($data['seed_sub_hug'], 0) + $bonus;

            $bonus = 1;
            $data['seed_sub_kiss'] = VarHelper::existOrElse($data['seed_sub_kiss'], 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 50);
            $data['seed_sub_masturbation'] = VarHelper::existOrElse($data['seed_sub_masturbation'], 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 33);
            $data['seed_sub_masturbation'] = VarHelper::existOrElse($data['seed_sub_masturbation'], 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 25);
            $data['seed_sub_masturbation'] = VarHelper::existOrElse($data['seed_sub_masturbation'], 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 25);
            $data['seed_sub_anal'] = VarHelper::existOrElse($data['seed_sub_anal'], 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 33);
            $data['seed_sub_bj'] = VarHelper::existOrElse($data['seed_sub_bj'], 0) + $bonus;

            if(RandomHelper::randChooseVar(1,0,75))
            {
                $data['seed_virginity'] = 1;

                $bonus = 1;
                $data['seed_sub_hug'] = VarHelper::existOrElse($data['seed_sub_hug'], 0) + $bonus;

                $bonus = 1;
                $data['seed_sub_kiss'] = VarHelper::existOrElse($data['seed_sub_kiss'], 0) + $bonus;

                $bonus = 1;
                $data['seed_sub_seduce'] = VarHelper::existOrElse($data['seed_sub_seduce'], 0) + $bonus;

                $bonus = 2;
                $data['seed_sub_vaginal'] = VarHelper::existOrElse($data['seed_sub_vaginal'], 0) + $bonus;

                $data['seed_sub_anal'] += RandomHelper::randChooseVar(1, 0, 33);
                $data['seed_sub_anal'] += RandomHelper::randChooseVar(1, 0, 25);
                $data['seed_sub_bj'] += RandomHelper::randChooseVar(1, 0, 50);
                $data['seed_sub_bj'] += RandomHelper::randChooseVar(1, 0, 33);
            }
        }

        $data['seed_sub_hj'];
        $data['seed_sub_fj'];
        $data['seed_sub_hug'];
        $data['seed_sub_pazuri'];
        $data['seed_sub_kiss'];
        $data['seed_sub_thongue'];
        $data['seed_sub_bj'];
        $data['seed_sub_dt'];
        $data['seed_sub_asslik'];
        $data['seed_sub_vaginal'];
        $data['seed_sub_anal'];
        $data['seed_sub_fisting'];
        $data['seed_anal_stretch'];
        $data['seed_sub_seduce'];
        $data['seed_sub_masturbation'];
        $data['seed_sub_dildo'];
        $data['seed_sub_exhibit'];
        $data['seed_sub_humiliation'];
        $data['seed_sub_enema'];
        $data['seed_sub_mazo'];
        $data['seed_sub_selfpain'];
        $data['seed_sub_piss'];
        $data['seed_sub_kopro'];
        $data['seed_sub_threesome'];
        $data['seed_sub_dp'];
        $data['seed_sub_tp'];
        $data['seed_sub_gangbang'];
        $data['seed_sub_bukake'];
        $data['seed_sub_zoosex'];
        $data['seed_sub_bestiality'];
        $data['seed_sub_horse'];
        $data['seed_sub_tentacles']; // or seed_sub_polypusvermin
        $data['seed_sub_arachnidSpider'];

        $data['seed_psy_basic'];

        //Traits

        //Equipment TODO other slots
        $data['seed_weapon'];
        $data['seed_weapon_second'];
        $data['seed_armor'];
        $data['seed_cloth'];

                //Descriptions
        $data['stock_family_description'] = VarHelper::existOrElse($data['stock_family_description'], RandomHelper::randArrayValue($family->getDescriptions()));
        $data['stock_world_description'] = VarHelper::existOrElse($data['stock_world_description'], RandomHelper::randArrayValue($world->getDescriptions()));
        $data['stock_occupation_description'] = VarHelper::existOrElse($data['stock_occupation_description'],''); //TODO

                //Images
        $data['seed_ava'];
        $data['seed_ava_gray'];
        $data['seed_ava_clear'];

        $data['seed_boobs_img'];
        $data['seed_pussy_img'];

        $data['bathing_alone'];
        $data['cello'];
        $data['cleaning'];
        $data['cooking'];
        $data['dance'];
        $data['desertag'];
        $data['enchanting'];
        $data['fighting'];
        $data['flyte'];
        $data['guitar'];
        $data['gymnastics'];
        $data['lesbo_bath'];
        $data['nurse'];
        $data['piano'];
        $data['rest'];
        $data['secretary'];
        $data['student'];
        $data['singing'];
        $data['violin'];
        $data['washing'];
        $data['analfisting'];
        $data['analsex'];
        $data['bondage'];
        $data['bdsm'];
        $data['bj'];
        $data['bukake'];
        $data['disgrace'];
        $data['defloration'];
        $data['deprivation_suit'];
        $data['dog_sex'];
        $data['dildo'];
        $data['dt'];
        $data['enema'];
        $data['exhibit'];
        $data['fisting'];
        $data['fj'];
        $data['gangbang'];
        $data['hj'];
        $data['horse_sex'];
        $data['hug'];
        $data['kiss'];
        $data['kopro'];
        $data['kuni'];
        $data['lesbian'];
        $data['masturbation'];
        $data['pazuri'];
        $data['petplay'];
        $data['petting'];
        $data['pig_sex'];
        $data['ponyplay'];
        $data['rimming'];
        $data['seduce'];
        $data['sex_vaginal'];
        $data['spider'];
        $data['thongue'];
        $data['tentacles'];
        $data['urine_drink'];
        $data['branding'];
        $data['cane'];
        $data['ear_grab'];
        $data['ironmaiden'];
        $data['fireswing'];
        $data['fist_hit'];
        $data['leash'];
        $data['needle'];
        $data['pins'];
        $data['slap'];
        $data['spank'];
        $data['strappado'];
        $data['verminpit'];
        $data['water'];
        $data['wax'];
        $data['woodenhorse'];
        $data['whip'];
        $data['impaling'];
        $data['decapitation'];
        $data['hanging'];
        $data['throat_slit'];
        $data['cook_whole'];

        $data = $world->affectJsonData($data);
        $data = $family->affectJsonData($data);
        $data = $occupation->affectJsonData($data);

        return $data;
    }

    private static function importTraitsFromData(Apprentice $apprentice, $data)
    {
        $key_to_class = [
            'seed_sport_affinity' => SportAffinity::class,
            'seed_expression_affinity' => ExpressionAffinity::class,
            'seed_pet_affinity' => PetAffinity::class,
            'seed_dressage_affinity' => DressageAffinity::class,
            'seed_nurse_affinity' => NurseAffinity::class,
            'seed_service_affinity' => ServiceAffinity::class,
            'seed_cook_affinity' => CookAffinity::class,
            'seed_gladiatrix_affinity' => GladiatorAffinity::class,
            'seed_enchanter_affinity' => EnchanterAffinity::class,
            'seed_vocal_affinity' => VocalAffinity::class,
            'seed_music_affinity' => MusicAffinity::class,
            'seed_callisthenics_affinity' => DanceAffinity::class,
            'seed_secretary_affinity' => SecretaryAffinity::class,
            'seed_memory' => Memory::class,
            'seed_meekness' => Meekness::class,
            'seed_selfesteem' => Selfesteem::class,
            'seed_voice' => Voice::class,
            'seed_compassion' => Compassion::class,
            'seed_courage' => Courage::class,
            'seed_grace' => Grace::class,
            'seed_nymphomania' => Nymphomania::class,
            'seed_exhibitionism' => Exhibitionism::class,
            'seed_preversion' => Perversion::class,
            'seed_masohism' => Masohism::class,
            'seed_homosexualism' => Homosexualism::class,
            'seed_abuse_attitude' => AbuseAttitude::class,
            'seed_blood_attitude' => BloodAttitude::class,
            'seed_passion_sweets' => PassionSweets::class,
            'seed_ill' => Illness::class,
            'seed_parasite' => Parasite::class,
            'seed_slave_scares' => Scars::class,
            'seed_scares' => Scars::class,
            'seed_slave_bruises' => Bruises::class,
            'seed_bruises' => Bruises::class,
        ];

        foreach ($key_to_class as $key => $class)
        {
            if(!empty($data[$key]))
            {
                $apprentice->traits->attachQuiet(new $class());
                if(!empty($data[$key . '_revealed']))
                {
                    $apprentice->traits->revealTrait($class);
                }
            }
        }

    }

    /**
     * @param $filename
     * @return Apprentice
     */
    public static function export($filename)
    {
        $apprentice = new Apprentice();

        $data = static::load($filename);
        $data = static::fillUpLoadedData($data);

        //Attributes
        $apprentice->name = $data['seed_name'];
        $apprentice->world_id = $data['seed_world'];
        $apprentice->family_origin_id = $data['seed_family'];
        $apprentice->template_id = $filename;
        $apprentice->occupation_id = $data['seed_occupation'];
        $apprentice->age->value = $data['seed_age'] + 1; //json age margin
        $apprentice->attributes->beauty->value = $data['seed_beauty'];
        $apprentice->attributes->sensuality->value = $data['seed_sensitivity'];
        $apprentice->attributes->temperament->value = $data['seed_temper'];
        $apprentice->attributes->ego->value = $data['seed_ego'];
        $apprentice->attributes->pride->value = $data['seed_pride'];
        $apprentice->attributes->intellect->value = $data['seed_intellect'];
        $apprentice->attributes->constitution->value = $data['seed_fat'];
        $apprentice->attributes->exoticism->value = $data['seed_exotic'];
        $apprentice->attributes->arenaFame->value = $data['seed_fame_rate'];
        $apprentice->attributes->fertility->value = $data['seed_fertility'] < 0 ? 0 : $data['seed_fertility'];
        $apprentice->attributes->fertility->revealed = $data['seed_fertility_revealed'];
        $apprentice->attributes->stamina->value = $data['seed_stamina'];
        $apprentice->attributes->metabolism->value = $data['seed_metabolism'];

        //Aura
        $apprentice->aura->habit->value = $data['seed_custom'];
        $apprentice->aura->loyalty->value = $data['seed_moral'];
        $apprentice->aura->taming->value = $data['seed_instinct'];
        $apprentice->aura->awareness->value = $data['seed_awareness'];
        $apprentice->aura->obedience->value = $data['seed_obedience'];
        $apprentice->aura->lust->value = $data['seed_lust'];
        $apprentice->aura->fear->value = $data['seed_fear'];
        $apprentice->aura->desperation->value = $data['seed_angst'];
        $apprentice->aura->corruption->value = $data['seed_spoil'];

        //Skills
        $apprentice->skills->expression->value = $data['seed_expression'];
        $apprentice->skills->pet->value = $data['seed_pet'];
        $apprentice->skills->horse->value = $data['seed_dressage'];
        $apprentice->skills->nurse->value = $data['seed_nurse'];
        $apprentice->skills->maid->value = $data['seed_service'];
        $apprentice->skills->cook->value = $data['seed_cook'];
        $apprentice->skills->gladiator->value = $data['seed_gladiatrix'];
        $apprentice->skills->enchanter->value = $data['seed_enchanter'];
        $apprentice->skills->vocal->value = $data['seed_vocal'];
        $apprentice->skills->music->value = $data['seed_music'];
        $apprentice->skills->dancer->value = $data['seed_callisthenics'];
        $apprentice->skills->secretary->value = $data['seed_secretary'];

        //SkillsSex
        $apprentice->skillsSex->petting->subSkills->hj->value = $data['seed_sub_hj'];
        $apprentice->skillsSex->petting->subSkills->fj->value = $data['seed_sub_fj'];
        $apprentice->skillsSex->petting->subSkills->hugging->value = $data['seed_sub_hug'];
        $apprentice->skillsSex->petting->subSkills->pazuri->value = $data['seed_sub_pazuri'];
        $apprentice->skillsSex->oral->subSkills->kissing->value = $data['seed_sub_kiss'];
        $apprentice->skillsSex->oral->subSkills->licking->value = $data['seed_sub_thongue'];
        $apprentice->skillsSex->oral->subSkills->bj->value = $data['seed_sub_bj'];
        $apprentice->skillsSex->oral->subSkills->dt->value = $data['seed_sub_dt'];
        $apprentice->skillsSex->oral->subSkills->aLicking->value = $data['seed_sub_asslik'];
        $apprentice->skillsSex->penetration->subSkills->vaginal->value = $data['seed_sub_vaginal'];
        $apprentice->skillsSex->penetration->subSkills->anal->value = $data['seed_sub_anal'];
        $apprentice->skillsSex->penetration->subSkills->fisting->value = $data['seed_sub_fisting'];
        $apprentice->skillsSex->penetration->subSkills->aFisting->value = $data['seed_anal_stretch'];
        $apprentice->skillsSex->demonstration->subSkills->seduce->value = $data['seed_sub_seduce'];
        $apprentice->skillsSex->demonstration->subSkills->masturbation->value = $data['seed_sub_masturbation'];
        $apprentice->skillsSex->demonstration->subSkills->masturbation->value = $data['seed_sub_dildo'];
        $apprentice->skillsSex->demonstration->subSkills->exhibit->value = $data['seed_sub_exhibit'];
        $apprentice->skillsSex->demonstration->subSkills->humiliation->value = $data['seed_sub_humiliation'];
        $apprentice->skillsSex->fetish->subSkills->enema->value = $data['seed_sub_enema'];
        $apprentice->skillsSex->fetish->subSkills->mazo->value = $data['seed_sub_mazo'];
        $apprentice->skillsSex->fetish->subSkills->selfpain->value = $data['seed_sub_selfpain'];
        $apprentice->skillsSex->fetish->subSkills->goldenRain->value = $data['seed_sub_piss'];
        $apprentice->skillsSex->fetish->subSkills->copro->value = $data['seed_sub_kopro'];
        $apprentice->skillsSex->orgy->subSkills->threesome->value = $data['seed_sub_threesome'];
        $apprentice->skillsSex->orgy->subSkills->dp->value = $data['seed_sub_dp'];
        $apprentice->skillsSex->orgy->subSkills->tp->value = $data['seed_sub_tp'];
        $apprentice->skillsSex->orgy->subSkills->gangbang->value = $data['seed_sub_gangbang'];
        $apprentice->skillsSex->orgy->subSkills->bukkake->value = $data['seed_sub_bukake'];
        $apprentice->skillsSex->xenophily->subSkills->dog->value = $data['seed_sub_zoosex'];
        $apprentice->skillsSex->xenophily->subSkills->beast->value = $data['seed_sub_bestiality'];
        $apprentice->skillsSex->xenophily->subSkills->horse->value = $data['seed_sub_horse'];
        $apprentice->skillsSex->xenophily->subSkills->tentacleSea->value = $data['seed_sub_tentacles']; // or seed_sub_polypusvermin
        $apprentice->skillsSex->xenophily->subSkills->spider->value = $data['seed_sub_arachnidSpider'];

        //Body
        $apprentice->body->breast->value = $data['seed_boobs'];
        $apprentice->body->vagina->is_virgin = $data['seed_virginity'] == 0;
        $apprentice->body->vagina->value = $apprentice->body->vagina->is_virgin ? 0 : 2;
        $apprentice->body->mind->value = $data['seed_psy_basic'];

        //Traits
        static::importTraitsFromData($apprentice, $data);

        //Equipment TODO other slots
        $apprentice->equipment->weapon->id = $data['seed_weapon'];
        $apprentice->equipment->weaponSecond->id = $data['seed_weapon_second'];
        $apprentice->equipment->armor->id = $data['seed_armor'];
        $apprentice->equipment->cloth->id = $data['seed_cloth'];

        //Descriptions
        $apprentice->descriptions->family = $data['stock_family_description'];
        $apprentice->descriptions->world = $data['stock_world_description'];
        $apprentice->descriptions->occupation = $data['stock_occupation_description'];

        //Images
        $apprentice->visuals->avatar = $data['seed_ava'];
        $apprentice->visuals->avatar_gray = $data['seed_ava_gray'];
        $apprentice->visuals->avatar_clear = $data['seed_ava_clear'];

        $apprentice->visuals->boobs = $data['seed_boobs_img'];
        $apprentice->visuals->pussy = $data['seed_pussy_img'];

        $apprentice->visuals->bathing_alone = $data['bathing_alone'];
        $apprentice->visuals->cello = $data['cello'];
        $apprentice->visuals->cleaning = $data['cleaning'];
        $apprentice->visuals->cooking = $data['cooking'];
        $apprentice->visuals->dance = $data['dance'];
        $apprentice->visuals->desertag = $data['desertag'];
        $apprentice->visuals->enchanting = $data['enchanting'];
        $apprentice->visuals->fighting = $data['fighting'];
        $apprentice->visuals->flyte = $data['flyte'];
        $apprentice->visuals->guitar = $data['guitar'];
        $apprentice->visuals->gymnastics = $data['gymnastics'];
        $apprentice->visuals->lesbo_bath = $data['lesbo_bath'];
        $apprentice->visuals->nurse = $data['nurse'];
        $apprentice->visuals->piano = $data['piano'];
        $apprentice->visuals->rest = $data['rest'];
        $apprentice->visuals->secretary = $data['secretary'];
        $apprentice->visuals->student = $data['student'];
        $apprentice->visuals->singing = $data['singing'];
        $apprentice->visuals->violin = $data['violin'];
        $apprentice->visuals->washing = $data['washing'];
        $apprentice->visuals->analfisting = $data['analfisting'];
        $apprentice->visuals->analsex = $data['analsex'];
        $apprentice->visuals->bondage = $data['bondage'];
        $apprentice->visuals->bdsm = $data['bdsm'];
        $apprentice->visuals->bj = $data['bj'];
        $apprentice->visuals->bukkake = $data['bukake'];
        $apprentice->visuals->disgrace = $data['disgrace'];
        $apprentice->visuals->defloration = $data['defloration'];
        $apprentice->visuals->deprivation_suit = $data['deprivation_suit'];
        $apprentice->visuals->dog_sex = $data['dog_sex'];
        $apprentice->visuals->dildo = $data['dildo'];
        $apprentice->visuals->dt = $data['dt'];
        $apprentice->visuals->enema = $data['enema'];
        $apprentice->visuals->exhibit = $data['exhibit'];
        $apprentice->visuals->fisting = $data['fisting'];
        $apprentice->visuals->fj = $data['fj'];
        $apprentice->visuals->gangbang = $data['gangbang'];
        $apprentice->visuals->hj = $data['hj'];
        $apprentice->visuals->horse_sex = $data['horse_sex'];
        $apprentice->visuals->hug = $data['hug'];
        $apprentice->visuals->kiss = $data['kiss'];
        $apprentice->visuals->kopro = $data['kopro'];
        $apprentice->visuals->kuni = $data['kuni'];
        $apprentice->visuals->lesbian = $data['lesbian'];
        $apprentice->visuals->masturbation = $data['masturbation'];
        $apprentice->visuals->pazuri = $data['pazuri'];
        $apprentice->visuals->petplay = $data['petplay'];
        $apprentice->visuals->petting = $data['petting'];
        $apprentice->visuals->pig_sex = $data['pig_sex'];
        $apprentice->visuals->ponyplay = $data['ponyplay'];
        $apprentice->visuals->rimming = $data['rimming'];
        $apprentice->visuals->seduce = $data['seduce'];
        $apprentice->visuals->sex_vaginal = $data['sex_vaginal'];
        $apprentice->visuals->spider = $data['spider'];
        $apprentice->visuals->tongue = $data['thongue'];
        $apprentice->visuals->tentacles = $data['tentacles'];
        $apprentice->visuals->urine_drink = $data['urine_drink'];
        $apprentice->visuals->branding = $data['branding'];
        $apprentice->visuals->cane = $data['cane'];
        $apprentice->visuals->ear_grab = $data['ear_grab'];
        $apprentice->visuals->ironmaiden = $data['ironmaiden'];
        $apprentice->visuals->fireswing = $data['fireswing'];
        $apprentice->visuals->fist_hit = $data['fist_hit'];
        $apprentice->visuals->leash = $data['leash'];
        $apprentice->visuals->needle = $data['needle'];
        $apprentice->visuals->pins = $data['pins'];
        $apprentice->visuals->slap = $data['slap'];
        $apprentice->visuals->spank = $data['spank'];
        $apprentice->visuals->strappado = $data['strappado'];
        $apprentice->visuals->verminpit = $data['verminpit'];
        $apprentice->visuals->water = $data['water'];
        $apprentice->visuals->wax = $data['wax'];
        $apprentice->visuals->woodenhorse = $data['woodenhorse'];
        $apprentice->visuals->whip = $data['whip'];
        $apprentice->visuals->impaling = $data['impaling'];
        $apprentice->visuals->decapitation = $data['decapitation'];
        $apprentice->visuals->hanging = $data['hanging'];
        $apprentice->visuals->throat_slit = $data['throat_slit'];
        $apprentice->visuals->cook_whole = $data['cook_whole'];

        return $apprentice;
    }
}
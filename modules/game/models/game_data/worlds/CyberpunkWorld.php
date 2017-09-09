<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class CyberpunkWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::CYBERPUNK;
    }

    public function getName()
    {
        return 'Высоких технологий';
    }

    public function getNameAuc()
    {
        return 'мира высоких технологий';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_ego' => 1,
            'seed_intellect' => 1,
            'seed_temper' => -1,
            'seed_stamina' => -1,
        ]);
    }

    public function getNameBase()
    {
        return mt_rand(1,2) == 1 ? 'russian' : 'euro';
    }

    public function getDescriptions()
    {
        return [
            'Моим миром правит информация. 
            Глобальная сеть связывает между собой самые отдаленные уголки планеты. 
            В Сети можно найти всё: кино, музыку, игры, любую информацию и развлечения. 
            95% населения живет на пособия, едва хватает на еду. Но пока есть развлечения никто особенно не возражает.',

            'Мой мир разделен на Государства и Анклавы. 
            Хотя больше людей живет в государствах, они всего лишь отмирающая форма организации общества. 
            Анклавы целиком принадлежат корпорациям и подчиняются корпоративным законам. И именно Анклавы владеют богатством и технологиями.',

            'Моими миром правят транснациональные корпорации. 
            Государство как форма правления уже не существует, 
            законы пишутся менеджментом корпораций, и их цель одна — прибыль. 
            Тот, у кого есть деньги, может себе позволить все. Тот у кого их нет... всегда найдется место в тени общества среди отбросов и синтетических наркотиков.',
        ];
    }

    public function getAvailableFamilyOriginIds()
    {
        return [
            'orpnange',
            'worker',
            'policeman',
            'manager',
            'biologist',
            'programmer',
            'surgeon',
            'buissinesman',
            'finance',
            'general',
            'gendesigner',
        ];
    }
}
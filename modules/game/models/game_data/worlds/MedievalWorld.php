<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class MedievalWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::MEDIEVAL;
    }

    public function getName()
    {
        return 'Традиционно-аграрный';
    }

    public function getNameAuc()
    {
        return 'традиционно-аграрного мира';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_temper' => $data['seed_temper'] < 5 ? $data['seed_temper'] - 1 : $data['seed_temper'],
            'seed_ego' => -1,
            'seed_intellect' => -1,
            'seed_custom' => 1,
        ]);
    }

    public function getNameBase()
    {
        return 'medieval';
    }

    public function getDescriptions()
    {
        return [
            'На моей родине очень красивая природа: много лесов, лугов, рек и озер. Горы покрыты шапками блестящего снега. Всеми этими землями владеют бароны и рыцари, которые служат королю и собирают оброк с крестьян, живущих возле их замков. Простым людям живется несладко.',
            'В моем мире у каждого человека есть свое место и каждый знает, что надо делать. Короли и бароны правят своими землями, рыцари воют с врагами, ремесленники делают горшки и инструменты, крестьяне пашут землю, а священники молятся за них всех и помогают добрым советом.',
            'Мой мир очень большой, так что я не все о нем знаю. Люди в городах живут богато, но там грязно, тесно и плохо пахнет. Бароны и рыцари сидят в своих каменных замках или ходят в военные походы. А крестьяне в селах пашут круглый год, чтобы прокормить и тех, и других.',
        ];
    }

    public function getAvailableFamilyOriginIds()
    {
        return [
            'orphan',
            'bondman',
            'gypsy',
            'church',
            'craftsman',
            'merchant',
            'valetry',
            'knight',
            'mprincess',
        ];
    }
}
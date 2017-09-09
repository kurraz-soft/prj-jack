<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class UtopiaWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::UTOPIA;
    }

    public function getName()
    {
        return 'Идиллическая утопия';
    }

    public function getNameAuc()
    {
        return 'идиллической утопии';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_spoil' => 1,
            'seed_intellect' => 1,
            'seed_exotic' => RandomHelper::randFloat(1,2),
            'seed_sensitivity' => 1,
            'seed_pride' => 1,
        ]);
    }

    public function getNameBase()
    {
        return 'utopia';
    }

    public function getDescriptions()
    {
        return [
            'В моем мире люди достигли гармонии с природой и навсегда забыли о голоде, войнах, преступлениях и болезнях. Гибкая система управления в которой участвует все взрослое население планеты, позволяет быстро решать любые задачи и справедливо распределять ресурсы.',
            'В нашем мире наука и техника шагнули так далеко, что для человека отпала надобность в тяжелом труде и конкуренции за ресурсы. Законы пишутся выдающимися людьми культуры и только в стихотворной форме. В воспитании детей особое внимание уделяется развитию эстетического чувства.',
            'Благодаря социальному прогрессу нам удалось устроить общество настолько гармонично, что отпала нужда в государствах, войнах, полиции и прочих инструментах насилия. Все люди живут в мире и достатке. Каждый гражданин должен хорошо рисовать и слагать стихи. Конфликты решаются только за столом переговоров.',
        ];
    }

    public function getAvailableFamilyOriginIds()
    {
        return [
            'poet',
            'artist',
            'architect',
            'operator',
        ];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\actions\home\apprentice\orders;


use app\modules\game\helpers\FormatterHelper;
use app\modules\game\models\game_data\Apprentice;
use app\modules\game\models\game_data\base\BaseGameAction;
use app\modules\game\models\game_data\body\Mind;
use app\modules\game\models\game_data\GameActionSlide;
use app\modules\game\models\game_data\Home;

class WashAlone extends BaseGameAction
{
    public function getEndRoute(): array
    {
        return ['index'];
    }

    public function __construct(Apprentice $apprentice, Home $home)
    {
        $this->caption = 'Ванная';
        $this->description = 'Муравейник'; //TODO home district

        $text = $this->textByMindState()[$apprentice->body->mind->value];

        $bg = FormatterHelper::imgPath($apprentice->visuals->bathing_alone, 'gif');

        $this->slides[] = new GameActionSlide($text,$bg);
    }

    public function textByMindState() : array
    {
        return [
            Mind::STATE_RELUCTANT => '<<$slave_name>> смотрит на вас подозрительным взглядом и идет в ванную. Видимо, она опасается, что за ней будут подглядывать, что действительно несложно осуществить, учитывая, что дверь не запирается. Несмотря на такой дискомфорт, ваша воспитуемая моется тщательно и с видимым удовольствием.',
            Mind::STATE_ARROGANT => 'Смерив вас презрительным взглядом и строго потребовав не подглядывать за ней, <<$slave_name>> удаляется в ванную и предается водным процедурам. Конечно же, вы бесцеремонно заглядываете, чтобы убедиться, что она вымылась тщательно и поняла, кто тут устанавливает правила.',
            Mind::STATE_HATEFUL => '<<$slave_name>> уходит в ванную и начинает так остервенело тереться мочалкой, словно это поможет ей отмыться от ваших прикосновений. Когда вы заглядываете внутрь, чтобы понаблюдать за процессом, она со злостью запускает в вас куском мыла и тут же получает заслуженный подзатыльник за плохое поведение.',
            Mind::STATE_RESISTANT => '<<$slave_name>> долго и внимательно глядит на вас, словно бы оценивая, стоит ли ей мыться, раз это нужно не только ей, но и вам. В итоге она все же решает, что быть чистой важнее, чем упорствовать, и удаляется в ванную.',
            Mind::STATE_LACHRYMOSE => '<<$slave_name>> уходит в ванную комнату и остается там подозрительно долго. Зайдя проверить, вы застаете её плачущей, сидя на мокром полу в обнимку с мочалкой. Вам приходится прикрикнуть на неё, чтобы она занялась делом и не тратила времени зря.',
            Mind::STATE_SOFT => '<<$slave_name>> явно рада возможности смыть с себя грязь и понежиться в теплой воде. Вы даже слышите, как она тихонько напевает себе под нос.',
            Mind::STATE_SERVILE => '<<$slave_name>> уходит в ванную комнату, оставляя дверь открытой, чтобы вы могли спокойно наблюдать. Она моется очень тщательно, явно желая, чтобы вы получали максимум удовольствия, пользуясь её телом.',
            Mind::STATE_FRIGHTENED => '<<$slave_name>> тихонько прошмыгивает в ванную комнату и включает воду. Даже в теплой воде она не расслабляется ни на секунду, все время поглядывая на незапирающуюся дверь.',
            Mind::STATE_OBEDIENT => '<<$slave_name>> уходит в ванную комнату, оставляя дверь открытой, чтобы вы могли спокойно наблюдать. Она моется очень тщательно, но не тратит лишнего времени, чтобы не вызывать вашего неудовольствия.',
            Mind::STATE_BROKEN => 'С абсолютно безразличным лицом <<$slave_name>> удаляется в ванную комнату, включает воду и начинает методично мылиться и обмываться, словно какой-то заторможенный автомат. Она совершенно не обращает внимания на то, что вы за ней наблюдаете. На все про все уходит не более десяти минут.',
            Mind::STATE_DEPRESIVE => '<<$slave_name>> понуро отправляется в ванную и начинает мыться. Похоже, что процедура эта ей не интересна: она думает о чем-то своём и часто вздыхает. Вам приходится поторопить её, чтобы не тратила времени попусту.',
            Mind::STATE_HORNY => '<<$slave_name>> направляется в ванную комнату, но останавливается на пороге, спрашивая вас, не желаете ли вы к ней присоединиться. Получив отказ, она вздыхает и включает воду. Судя по затраченному на процедуру времени, она успела не только тщательно вымыться, но и поласкать себя под теплыми струями воды.',
            Mind::STATE_HYSTERIC => '<<$slave_name>> убегает в ванную комнату и громко хлопает за собой дверью. Вы заходите, чтобы строго предупредить её вести себя аккуратнее и не разводить сырость. Воспитуемая демонстративно игнорирует ваши слова, но моется довольно аккуратно и тщательно. Закончив процедуру, она ехидно показывает вам язык.',
            Mind::STATE_OPTIMISTIC => 'С довольной улыбкой <<$slave_name>>  удаляется в ванную комнату. Она явно рада возможности хорошенько вымыться и покайфовать в теплой воде.',
            Mind::STATE_DOCILE => 'Следуя вашим инструкциям держать себя в чистоте, <<$slave_name>> отправляется мыться. Вы следуете за ней, чтобы понаблюдать за процессом и намеренно даёте дурацкие советы, чтобы усилить чувство унижения. Воспитуемая не смеет вам перечить, хотя чувствует себя явно некомфортно.',
        ];
    }
}
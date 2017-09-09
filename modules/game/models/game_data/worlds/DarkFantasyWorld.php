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

class DarkFantasyWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::DARKFANTASY;
    }

    public function getName()
    {
        return 'Темной магии';
    }

    public function getNameAuc()
    {
        return 'мира темной магии';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_stamina' => -1,
            'seed_temper' => -1,
            'seed_ego' => -1,
            'seed_sensitivity' => -1,
            'seed_intellect' => -1,
            'seed_pride' => -1,
            'seed_exotic' => RandomHelper::randFloat(1,4),
            'seed_custom' => 2,
        ]);
    }

    public function getNameBase()
    {
        return mt_rand(1,2) == 1 ? 'medieval' : 'barbarian';
    }

    public function getDescriptions()
    {
        return [
            'Сколько я себя помню, у нас были тяжелые времена. 
            Говорят, что когда то давно, при старой империи, люди жили богато и счастливо. 
            Но сейчас леса полны разбойников и диких зверей, бароны не могут и не хотят поддерживать порядок в своих землях, 
            а крестьяне под их гнетом голодают почти каждую зиму.',

            'Жизнь в нашем мире нелегка. 
            В темных лесах таятся ужасные твари, которые могут разорить целую деревню. 
            Некроманты востока поднимают армии нежити, а чернокнижники правят западными землями, нашептывая приказы королям. 
            Конечно есть и герои, которые дают отпор злу, но их слишком мало.',

            'Священники говорят, что наш мир умирает и конец уже близок. 
            Мертвецы восстают из могил и бродят ночами по заброшенным древним городам. 
            Драконы сжигают деревни и пожирают скот. Черная смерть косит детей и стариков. И каждый следующий год хуже чем предыдущий.',
        ];
    }
}
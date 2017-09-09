<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class SnsWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::SNS;
    }

    public function getName()
    {
        return 'Меча и магии';
    }

    public function getNameAuc()
    {
        return 'мира меча и магии';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_stamina' => 1,
            'seed_ego' => -1,
            'seed_intellect' => -1,
        ]);
    }

    public function getNameBase()
    {
        return 'barbarian';
    }

    public function getDescriptions()
    {
        return [
            'В моем мире живет очень много разных народов, и все они непрестанно воюют за место под солнцем. Неисчислимые орды кочевников осаждают богатые города, окруженные высокими стенами. Дикие племена населяют леса и болота, промышляя грабежом караванов. Великие цари правят огромными империями.',
            'Мой мир велик и необъятен. Я знаю, что на востоке лежит бескрайнее море. Дальний юг населен дикими людьми с кожей черной, как сама ночь. На севере непроходимые леса, в которых живут низкорослые, но злые племена охотников. Западными степями правят кочевники, живущие грабежом и разоряющие города.',
            'В моем мире много разных культур и народов. Есть короли, у которых сокровищницы ломятся от золота, черные колдуны, могущество которых превыше власти королей, и бесстрашные герои, которые не боятся даже колдунов. Но больше, конечно, простого народа — крестьян, солдат, ремесленников и торговцев.',
        ];
    }

    public function getAvailableFamilyOriginIds()
    {
        return [
            'amazon',
            'nomad',
            'pesant',
            'hunter',
            'fisher',
            'viking',
            'barbarian_king',
        ];
    }
}
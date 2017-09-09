<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class IndustrialWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::INDUSTRIAL;
    }

    public function getName()
    {
        return 'Индустриально развитый';
    }

    public function getNameAuc()
    {
        return 'индустриально развитого мира';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_custom' => 1,
        ]);
    }

    public function getNameBase()
    {
        return mt_rand(1,2) == 1 ? 'oldschool' : 'euro';
    }

    public function getDescriptions()
    {
        return [
            'Хотя в моем мире много разных государств, всем понятно, что истинная власть находится в руках банкиров и промышленников. Рабочие люди создают профсоюзы и устраивают стачки, но власти не терпят таких беспорядков и подавляют их очень жестоко. Люди озлоблены, многие живут в нищете и не могут найти работу.',
            'В моем мире сейчас идет очень большая война, её даже назвали Великой Мировой, потому что в ней участвуют почти все государства. Бомбежки, артобстрелы, газовые атаки — все это уже стало привычно не только для солдат в окопах, но и для мирных жителей. Еды не хватает, все по карточкам.',
            'В моем мире недавно закончилась Великая Война. Она была такой страшной, что после подписания мира все страны объединились в Мировую Лигу, чтобы не допустить её повторения. Промышленность постепенно восстанавливается, но разрухи еще много. Кое-где даже происходят революции, меняются режимы.',
        ];
    }

    public function getAvailableFamilyOriginIds()
    {
        return [
            'farmers',
            'workhouse',
            'proletarian',
            'clerk',
            'naturalist',
            'ingeneer',
            'doctor',
            'servant',
            'magnat',
            'bankeer',
            'mayor',
            'mafiosi',
        ];
    }
}
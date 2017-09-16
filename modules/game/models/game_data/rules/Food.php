<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\helpers\VarHelper;
use app\modules\game\models\game_data\base\BaseRule;

class Food extends BaseRule
{
    const NO = 1;
    const DRY_FOOD = 2;
    const FRESH_FOOD = 3;
    const BEAST_SPERM = 4;
    const MASTERS_FOOD = 5;

    public $masters_food = false;

    public $name = 'Режим питания';

    public function setValue($new_value)
    {
        if($new_value == self::MASTERS_FOOD)
        {
            $this->masters_food = !$this->masters_food;
        }else
            parent::setValue($new_value);
    }

    public function serialize()
    {
        return array_merge(parent::serialize(), ['masters_food' => $this->masters_food]);
    }

    public function unserialize($serialized_data)
    {
        parent::unserialize($serialized_data);

        if(isset($serialized_data['masters_food']))
        {
            $this->masters_food = $serialized_data['masters_food'];
        }
    }

    public function valueTextTemplates()
    {
        return [
            self::NO => 'В Вечном Риме практически нет возможностей для выращивания собственной еды. Всю еду привозят сюда из миров, лежащих за Туманами, а потому она стоит изрядных денег. Лишив рабыню еды, вы убьёте двух зайцев разом — научите её послушанию и неплохо сэкономите на её содержании.',
            self::DRY_FOOD => 'Сухой корм для питомцев "Джульбарс-джумас" - выбор ведущих работорговцев. Поставляется в десятилитровых целлофановых мешках, и благодаря небольшому удельному весу дёшев в перевозке из-за Туманов. Содержит все необходимые питательные вещества и волокна, но на вкус отвратителен.',
            self::FRESH_FOOD => 'В консервах для домашних животных оптимально подобран состав питательных веществ и они намного приятнее на вкус, чем сухой корм или семя исчадий, так что кормить прилежную рабыню такое едой - лучший способ показать, как вы её цените. К сожалению, цена кусается — не дегидрированная пища весит много, а везти её приходится из других миров.',
            self::BEAST_SPERM => 'Исчадия — это и бич, и благословение Рима, они опасны, однако способны производить из любой неорганики огромные массы мерзкой, но питательной спермы. Правда подоить такую тварь непросто, так что семя выходит не слишком дешевым. Впрочем, при наличии собственного исчадия и хорошей доярки, прокормить рабыню становится намного проще. Если конечно удастся заставить её это съесть...',
            'no_masters_food' => 'Не каждая рабыня заслуживает питаться объедками со стола господина. Эту честь надо ещё заслужить и осознать. Кроме того, не стоит забывать и о фигуре.',
            'masters_food' => 'Всё, что не доел хозяин, может доесть рабыня. Объедки с вашего стола куда вкуснее обычной рабской пищи, хотя их обычно маловато, чтобы насытиться до конца. Можно рассматривать это как десерт, приятную добавку к основной пище. Главное, чтобы рабыня не возомнила, что ей позволено больше, чем она заслуживает.',
        ];
    }

    public function getValueText($value, $params = [])
    {
        if($value == self::MASTERS_FOOD)
        {
            if($params['masters_food'])
            {
                return $this->valueTextTemplates()['masters_food'];
            }else
            {
                return $this->valueTextTemplates()['no_masters_food'];
            }
        }else
            return parent::getValueText($value);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class FoodValue extends BaseRule
{
    const LOOSE_WEIGHT = 1;
    const KEEP_WEIGHT = 2;
    const GAIN_WEIGHT = 3;
    const DIET_DOCTOR = 4;
    const BIO_ADDONS = 5;

    public $value = self::KEEP_WEIGHT;

    public $bio_addons = false;

    public function setValue($new_value)
    {
        if($new_value == self::BIO_ADDONS)
        {
            $this->bio_addons = !$this->bio_addons;
        }else
            parent::setValue($new_value);
    }

    public function serialize()
    {
        return array_merge(parent::serialize(), [
            'bio_addons' => $this->bio_addons,
        ]);
    }

    public function unserialize($serialized_data)
    {
        parent::unserialize($serialized_data);

        if(isset($serialized_data['diet_doctor']))
        {
            $this->diet_doctor = $serialized_data['diet_doctor'];
        }
        if(isset($serialized_data['bio_addons']))
        {
            $this->bio_addons = $serialized_data['bio_addons'];
        }
    }

    public function valueTextTemplates()
    {
        return [
            self::LOOSE_WEIGHT => 'Вы помещаете в миску рабыни совсем немного еды, просто чтобы она не умерла от голода. Вряд ли она будет довольна, зато сбросит лишний вес и поймет кто тут хозяин. А вы сэкономите деньги.',
            self::KEEP_WEIGHT => 'Вы наполняете миску рабыни так, чтобы еды было на ваш взгляд в самый раз. Для точного расчёта калорий пригодилась бы ассистентка-медик. Вы же делаете всё на глазок, чтобы не возиться. Должно быть нормально.',
            self::GAIN_WEIGHT => 'Вы наполняете миску рабыни до краёв, чтобы она могла есть столько сколько пожелает. Расточительно конечно, но голодной она не останется. Может, немножко наберет вес.',
            self::DIET_DOCTOR => 'Всего за пять искр в день Диетолог Гильдии будет из ваших запасов готовить различные блюда, тщательно подбирая их в зависимости от нагрузок воспитуемой, что позволит сохранить её вес в неизменности.',
            'bio_addons' => 'Высокотехнологичный комплекс биологически активных добавок к пище, с красивыми надписями "На 25% больше наномолекул" и "Не содержит ГМО". Что за бред... Если вы сможете правильно рассчитать дозу - должно помочь, но вряд ли понадобится здоровой девушке. Только деньги тратить.',
            'no_bio_addons' => 'Не давать биодобавки',
        ];
    }

    public function getValueText($value, $params = [])
    {
        if ($value == self::BIO_ADDONS)
        {
            if($params['bio_addons'])
            {
                return $this->valueTextTemplates()['bio_addons'];
            }else
            {
                return $this->valueTextTemplates()['no_bio_addons'];
            }
        }else
            return parent::getValueText($value, $params);
    }
}
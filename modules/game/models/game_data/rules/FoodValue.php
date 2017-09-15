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

    public $diet_doctor = false;
    public $bio_addons = false;

    public function setValue($new_value)
    {
        if($new_value == self::BIO_ADDONS)
        {
            $this->bio_addons = !$this->bio_addons;
        }elseif($new_value == self::DIET_DOCTOR)
        {
            $this->diet_doctor = !$this->diet_doctor;
        }else
            parent::setValue($new_value);
    }

    public function serialize()
    {
        return array_merge(parent::serialize(), [
            'diet_doctor' => $this->diet_doctor,
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
}
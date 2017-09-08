<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\traits;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\base\ITrait;

class TraitManager extends BaseGameDataList
{
    /**
     * @var ITrait[]
     */
    public $traits = [];

    /**
     * @var array
     *
     * For serialize
     */
    public $traitClasses = [];

    public function serializableParams()
    {
        return [
            'traitClasses' => '',
        ];
    }

    public function unserialize($serialized_data)
    {
        parent::unserialize($serialized_data);

        $this->init();
    }

    public function init()
    {
        foreach ($this->traitClasses as $class)
        {
            /**
             * @var ITrait $trait
             */
            $trait = new $class();
            $trait->initContext($this->getParent());
            $this->traits[] = $trait;
        }
    }

    public function attach(ITrait $trait)
    {
        $trait->attachTo($this->getParent());

        $this->traits[] = $trait;
        $this->traitClasses[] = get_class($trait);
    }

    public function detach($class)
    {
        foreach ($this->traits as $trait)
        {
            if($trait instanceof $class)
            {
                $trait->detach();
                break;
            }
        }
    }
}
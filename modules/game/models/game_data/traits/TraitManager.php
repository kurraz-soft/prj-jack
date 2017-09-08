<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\traits;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\base\ITrait;
use yii\base\Exception;

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
    public $traitClassesData = [];

    public function serializableParams()
    {
        return [
            'traitClassesData' => '',
        ];
    }

    public function unserialize($serialized_data)
    {
        parent::unserialize($serialized_data);

        $this->init();
    }

    public function init()
    {
        foreach ($this->traitClassesData as $class => $data)
        {
            /**
             * @var ITrait $trait
             */
            $trait = new $class();
            $trait->initContext($this->getParent());
            $this->traits[get_class($trait)] = $trait;
        }
    }

    public function attach(ITrait $trait)
    {
        $trait->attachTo($this->getParent());

        $this->attachQuiet($trait);
    }

    public function attachQuiet(ITrait $trait)
    {
        $class = get_class($trait);

        $this->traits[$class] = $trait;
        $this->traitClassesData[$class] = [
            'revealed' => false,
        ];
    }

    public function detach($class)
    {
        foreach ($this->traits as $trait)
        {
            if($trait instanceof $class)
            {
                $trait->detach();
                unset($this->traitClassesData[$class]);
                unset($this->traits[$class]);
                break;
            }
        }
    }

    public function getRevealedTraits()
    {
        $traits = [];
        foreach ($this->traitClassesData as $class => $data)
        {
            if($data['revealed'])
            {
                $traits[] = $this->traits[$class];
            }
        }

        return $traits;
    }

    public function isTraitRevealed($class)
    {
        if(!isset($this->traitClassesData[$class])) throw new Exception();

        return $this->traitClassesData[$class]['revealed'];
    }

    public function revealTrait($class)
    {
        if(!isset($this->traitClassesData[$class])) throw new Exception();

        $this->traitClassesData[$class]['revealed'] = true;
    }
}
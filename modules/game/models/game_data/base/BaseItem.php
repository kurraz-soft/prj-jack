<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


abstract class BaseItem extends BaseGameDataList
{
    public $id;
    public $name;
    public $description;

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function serializableParams()
    {
        return [
            'id' => '',
        ];
    }

    public function init()
    {
        parent::init();

        $this->loadFromLibrary();
    }

    abstract public function loadFromLibrary();
    abstract public function getDefaultId();

    public function equip()
    {
        //TODO
    }
}
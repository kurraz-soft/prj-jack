<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameData;
use app\modules\game\models\game_data\base\IAutoSerializable;
use app\modules\game\models\game_data\base\ISerializator;
use app\modules\game\models\game_data\base\TAutoSerializablePublicProperties;
use app\modules\game\models\game_data\serializators\AutoSerializator;

class ApprenticeManager extends BaseGameData implements IAutoSerializable
{
    use TAutoSerializablePublicProperties;

    /**
     * @var Person
     */
    public $active_apprentice = null;
    /**
     * @var Person
     */
    public $active_assistant = null;
    /**
     * @var Person[]
     */
    public $apprentices = [];

    /**
     * @var ISerializator
     */
    private $_serializator;

    public function __construct()
    {
        $this->_serializator = new AutoSerializator($this);
    }

    public function serialize()
    {
        return $this->_serializator->serialize();
    }

    public function unserialize($serialized_data)
    {
        $this->_serializator->unserialize($serialized_data);
    }
}
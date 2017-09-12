<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\base\TAutoSerializablePublicProperties;
use app\modules\game\models\game_data\home_rooms\BathHomeRoom;
use app\modules\game\models\game_data\home_rooms\BeastCageHomeRoom;
use app\modules\game\models\game_data\home_rooms\JailHomeRoom;
use app\modules\game\models\game_data\home_rooms\KitchenHomeRoom;
use app\modules\game\models\game_data\home_rooms\LabHomeRoom;
use app\modules\game\models\game_data\home_rooms\RefrigeratorHomeRoom;
use app\modules\game\models\game_data\home_rooms\StorageHomeRoom;

class Home extends BaseGameDataList
{
    use TAutoSerializablePublicProperties;

    /**
     * @var StorageHomeRoom
     */
    public $storage;

    /**
     * @var RefrigeratorHomeRoom
     */
    public $refrigerator;
    public $refrigerator_available = false;

    /**
     * @var KitchenHomeRoom
     */
    public $kitchen;
    public $kitchen_available = false;

    /**
     * @var JailHomeRoom
     */
    public $jail;
    public $jail_available = false;

    /**
     * @var BathHomeRoom
     */
    public $bath;
    public $bath_available = false;

    /**
     * @var BeastCageHomeRoom
     */
    public $beast_cage;
    public $beast_cage_available = false;

    /**
     * @var LabHomeRoom
     */
    public $lab;
    public $lab_available = false;
}
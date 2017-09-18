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
use app\modules\game\models\game_data\locations\WhiteCityLocation;
use yii\base\Exception;

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
    public $jail_rent = false;

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
    public $beast_cage_rent = false;

    /**
     * @var LabHomeRoom
     */
    public $lab;
    public $lab_available = false;
    public $lab_rent = false;

    public $img_id = 'slum';

    public $location_route;

    public $name = 'Муравейник';

    public function init()
    {
        parent::init();

        //Default district route
        if(!$this->location_route)
            $this->location_route = WhiteCityLocation::getRoute();
    }

    public function getImgHall()
    {
        return '/assets_game/img/bg/interiors/'.$this->img_id.'_study.jpg';
    }

    public function getImgLargeHall()
    {
        return '/assets_game/img/bg/interiors/'.$this->img_id.'_study_large.jpg';
    }

    public function getImgBed()
    {
        return '/assets_game/img/bg/interiors/'.$this->img_id.'_study.jpg';
    }

    public function getImgLargeBed()
    {
        return '/assets_game/img/bg/interiors/'.$this->img_id.'_study_large.jpg';
    }

    public function loadFromLibrary($id)
    {
        //reset non library params
        $this->beast_cage_rent = false;
        $this->lab_rent = false;
        $this->jail_rent = false;

        $data = json_decode(file_get_contents(\Yii::getAlias('@game/data/homes.json')),true);

        if(!isset($data[$id])) throw new Exception("There is no home with such id in library");

        $this->name = $data[$id]['name'];
        $this->bath_available = $data[$id]['bath_available'];
        $this->jail_available = $data[$id]['jail_available'];
        $this->refrigerator_available = $data[$id]['refrigerator_available'];
        $this->kitchen_available = $data[$id]['kitchen_available'];
        $this->beast_cage_available = $data[$id]['beast_cage_available'];
        $this->lab_available = $data[$id]['lab_available'];
        $this->img_id = $data[$id]['img_id'];
        $this->location_route = $data[$id]['location_route'];
    }
}
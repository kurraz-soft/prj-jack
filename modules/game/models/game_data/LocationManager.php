<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\helpers\VarHelper;
use app\modules\game\models\game_data\base\BaseGameData;
use app\modules\game\models\game_data\base\BaseLocation;

class LocationManager extends BaseGameData
{
    /**
     * @var BaseLocation[]
     */
    public $locations;

    protected function getLocationClasses()
    {
        return VarHelper::getNamespaceClasses('app\modules\game\models\game_data\locations');
    }

    public function serialize()
    {
        $ret = [];

        foreach ($this->locations as $location)
        {
            $ret[get_class($location)] = $location->serialize();
        }

        return $ret;
    }

    public function unserialize($serialized_data)
    {
        $location_classes = $this->getLocationClasses();
        foreach ($location_classes as $class)
        {
            /**
             * @var BaseLocation $location
             */
            $location = new $class();
            $this->locations[serialize($location->getRoute())] = $location;
        }

        foreach ($this->locations as $location)
        {
            if(!empty($serialized_data[get_class($location)]))
            {
                $location->unserialize($serialized_data[get_class($location)]);
            }
        }
    }

    static public function getStartLocationRoute()
    {
        return ['/game/home/index'];
    }

    public function getStartLocation()
    {
        return $this->getLocation(static::getStartLocationRoute());
    }

    /**
     * @param array $route
     * @return BaseLocation
     */
    public function getLocation($route)
    {
        $index = serialize($route);
        return $this->locations[$index] ?? null;
    }
}
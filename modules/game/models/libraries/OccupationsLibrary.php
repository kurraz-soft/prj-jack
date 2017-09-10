<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\libraries;


use app\modules\game\models\game_data\base\IOccupation;
use yii\base\Exception;

class OccupationsLibrary
{
    /**
     * @return array
     *
     * [id => $class]
     */
    public static function findAll()
    {
        $files = scandir(\Yii::getAlias('@game/models/game_data/occupations'));
        $id_to_class = [];
        foreach ($files as $file)
        {
            $matches = [];
            if(preg_match('#(.+)Occupation\.php#',$file, $matches))
            {
                $class = 'app\modules\game\models\game_data\occupations\\' . $matches[1] . 'Occupation';
                $id = strtolower($matches[1]);
                $id_to_class[$id] = $class;
            }
        }

        return $id_to_class;
    }

    /**
     * @param $occupation_id
     * @return IOccupation
     * @throws Exception
     */
    public static function factory($occupation_id)
    {
        $class = 'app\modules\game\models\game_data\family_origins\\' . $occupation_id . 'Occupation';
        if(!class_exists($class)) throw new Exception("Can't find class with such occupation_id");
        return new $class();
    }

    /**
     * @param array $intersect_ids
     * @return array
     */
    public static function getRandomId($intersect_ids = [])
    {
        $items = static::findAll();
        $ids = array_keys($items);

        if($intersect_ids)
            $ids = array_intersect($ids, $intersect_ids);

        return $ids[array_rand($ids)];
    }
}
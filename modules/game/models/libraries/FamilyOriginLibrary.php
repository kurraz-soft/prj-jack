<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\libraries;


use app\modules\game\models\game_data\base\IFamilyOrigin;
use yii\base\Exception;

class FamilyOriginLibrary
{
    /**
     * @return array
     *
     * [id => $class]
     */
    public static function findAll()
    {
        $files = scandir(\Yii::getAlias('@game/models/game_data/family_origins'));
        $id_to_class = [];
        foreach ($files as $file)
        {
            $matches = [];
            if(preg_match('#(.+)Family\.php#',$file, $matches))
            {
                $class = 'app\modules\game\models\game_data\family_origins\\' . $matches[1] . 'Family';
                $id = strtolower($matches[1]);
                $id_to_class[$id] = $class;
            }
        }

        return $id_to_class;
    }

    /**
     * @param $family_id
     * @return IFamilyOrigin
     * @throws Exception
     */
    public static function factory($family_id)
    {
        $class = 'app\modules\game\models\game_data\family_origins\\' . $family_id . 'Family';
        if(!class_exists($class)) throw new Exception("Can't find class with such family_id");
        return new $class();
    }

    /**
     * @param array $intersect_ids
     * @return array
     */
    public static function getRandomId($intersect_ids = [])
    {
        $families = static::findAll();
        $ids = array_keys($families);

        if($intersect_ids)
            $ids = array_intersect($ids, $intersect_ids);

        return $ids[array_rand($ids)];
    }
}
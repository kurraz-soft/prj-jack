<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\libraries;


class ApprenticesLibrary
{
    public static function load($filename)
    {
        return json_decode(file_get_contents(\Yii::getAlias('@game/data/apprentices/'.$filename.'.json')), true);
    }

    public static function find()
    {
        $dir = opendir(\Yii::getAlias('@game/data/apprentices'));
        $filenames = [];
        while(($file = readdir($dir)) !== false)
        {
            $filenames[] = explode('.',$file)[0];
        }

        return $filenames;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class ArtistOccupation implements IOccupation
{
    public function getId()
    {
        return 'artist';
    }

    public function getName()
    {
        return 'художница';
    }

    public function getDescriptions()
    {
        return [
            'С самого раннего детства моя душа лежала к живописи. Когда подросла, я, разумеется, решила стать художником. И хотя меня уже с удовольствием выставляли во многих галереях, сама я считаю, что мой стиль еще не сложился. Поле для экспериментов огромное. Мне хотелось открыть новую страницу в мировой живописи.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}
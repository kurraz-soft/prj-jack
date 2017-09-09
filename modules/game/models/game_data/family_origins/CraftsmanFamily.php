<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class CraftsmanFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'craftsman';
    }

    public function getName()
    {
        return 'Ремесленники';
    }

    public function getNameAuc()
    {
        return 'дочь ремесленника';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, []);
    }

    public function getDescriptions()
    {
        return [
            'Сколько себя помню, я жила в городе. У моего отца была гончарная мастерская и лавка при ней. Мои братья месили глину, отец лепил горшки, а мы с мамой расписывали их в яркие цвета. Иногда удавалось погулять, хотя меня редко отпускали за городскую стену.'
        ];
    }
}
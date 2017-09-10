<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class MafiosiFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'mafiosi';
    }

    public function getName()
    {
        return 'выросшая в мафиозной семье';
    }

    public function getNameAuc()
    {
        return 'выросшая в мафиозной семье';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мой папа был одним из донов в весьма влиятельной семье. Политики, профсоюзы, банки, - всех их он держал в кулаке. У нас был большой и богатый дом, который всегда охраняли вооруженные люди. Мама много ходила в театры и салоны, так что воспитывала меня больше кормилица и учителя.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'avanturiste',
'rich_bride',
'rich_bride',
'sufragist',

        ];
    }
}
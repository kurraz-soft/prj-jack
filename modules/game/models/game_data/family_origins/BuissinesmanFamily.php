<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class BuissinesmanFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'buissinesman';
    }

    public function getName()
    {
        return 'дочь преуспевающего бизнесмена';
    }

    public function getNameAuc()
    {
        return 'дочь преуспевающего бизнесмена';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я выросла в довольно богатой семье. Отец владел конторой по оптовой торговле запчастями, а мама вела домашнее хозяйство. И еще у нас была домработница. Обучали меня на дому, потому что папа не доверял качеству общего образования: говорил что оно для быдла и нищебродов.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'major',
'model',
'writer',
'artist',

        ];
    }
}
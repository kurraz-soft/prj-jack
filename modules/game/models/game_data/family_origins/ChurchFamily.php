<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class ChurchFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'church';
    }

    public function getName()
    {
        return 'Воспитанница церковного приюта';
    }

    public function getNameAuc()
    {
        return 'воспитанница церковного приюта';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [
            'seed_temper' => -1,
            'seed_ego' => -1,
            'seed_intellect' => 1,
            'seed_custom' => 1,
        ]);
    }

    public function getDescriptions()
    {
        return [
            'Еще во младенчестве я осталась сиротой, но мне повезло попасть в церковный приют. Монахи приучали нас правильно себя вести, помогать по хозяйству и чтить Бога. Самые способные обучались грамоте. Конечно, мы иногда шалили, и за это меня не раз пороли или запирали в келье.'
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'beggar',
            'nun',
            'valertry',
            'nun',
            'nun',
        ];
    }
}
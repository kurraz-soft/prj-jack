<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseGameDataList;

class ApprenticeBody extends BaseGameDataList
{
    /**
     * @var Breast
     */
    public $breast;
    /**
     * @var Vagina
     */
    public $vagina;
    /**
     * @var Anus
     */
    public $anus;
    /**
     * @var Tattoo
     */
    public $tattoo;
    /**
     * @var Hair
     */
    public $hair;
    /**
     * @var Makeup
     */
    public $makeup;
    /**
     * @var Mind
     */
    public $mind;

    public function serializableParams()
    {
        return [
            'breast' => Breast::class,
            'vagina' => Vagina::class,
            'anus' => Anus::class,
            'tattoo' => Tattoo::class,
            'makeup' => Makeup::class,
            'mind' => Mind::class,
        ];
    }
}
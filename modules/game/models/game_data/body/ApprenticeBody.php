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
     * @var Ears
     */
    public $ears;
    /**
     * @var Brand
     */
    public $brand;
    /**
     * @var Belly
     */
    public $belly;
    /**
     * @var Nose
     */
    public $nose;
    /**
     * @var Tongue
     */
    public $tongue;
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
    /**
     * @var bool
     */
    public $has_scarification = false;

    public function serializableParams()
    {
        return [
            'breast' => Breast::class,
            'vagina' => Vagina::class,
            'anus' => Anus::class,
            'tattoo' => Tattoo::class,
            'makeup' => Makeup::class,
            'mind' => Mind::class,
            'ears' => Ears::class,
            'brand' => Brand::class,
            'scarification' => '',
            'nose' => Nose::class,
            'belly' => Belly::class,
            'tongue' => Tongue::class,
        ];
    }
}
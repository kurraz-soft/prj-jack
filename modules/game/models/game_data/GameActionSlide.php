<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


class GameActionSlide
{
    /**
     * @var string
     */
    public $bg_img;
    /**
     * @var string
     */
    public $char_img;
    /**
     * @var string
     */
    public $person_name;
    /**
     * @var string
     */
    public $text;

    public function __construct($text = '', $bg_img = '', $person_name = '', $char_img = '')
    {
        $this->text = $text;
        $this->bg_img = $bg_img;
        $this->person_name = $person_name;
        $this->char_img = $char_img;
    }

    public function getCharImgPath()
    {
        return '/assets_game/img/' . $this->char_img . '.gif';
    }
}
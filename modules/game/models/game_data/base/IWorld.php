<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


interface IWorld extends IJsonDataAffectable
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getNameAuc();

    /**
     * @return string
     *
     * For NamesLibrary
     */
    public function getNameBase();

    /**
     * Text descriptions for apprentices coming from this world
     * @return array
     */
    public function getDescriptions();

    /**
     * @return array
     */
    public function getAvailableFamilyOriginIds();
}
<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-05-31
 * Time: 22:40
 */

namespace Gate\Exterior\Player;


interface PlayerInterface extends \Gate\Common\NamedEntityInterface
{
    public function getOrigin();
    public function setOrigin($origin);
    public function isActive();
    public function isLogged();
}
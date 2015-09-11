<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-05-31
 * Time: 22:39
 */

namespace Gate\Common;


interface NamedEntityInterface {
    public function getId();
    public function getName();
    public function setId($id);
    public function setName($name);
}
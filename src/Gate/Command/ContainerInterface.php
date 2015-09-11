<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-01
 * Time: 22:51
 */

namespace Gate\Command;


interface ContainerInterface
{
    /**
     * Zwraca nową instancję obiektu
     *
     * @param string $class
     * @return mixed
     */
    public function make($class);

}
<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-02
 * Time: 00:34
 */

namespace Gate\Command;


class BaseContainer implements ContainerInterface
{
    /**
     * Zwraca nową instancję obiektu
     *
     * @param string $class
     * @return mixed
     */
    public function make($class)
    {
        return new $class;
    }

}
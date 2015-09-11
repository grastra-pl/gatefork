<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-01
 * Time: 23:03
 */

namespace Gate\Command;


interface InflectorInterface
{
    /**
     * Znajduje Handler dla polecenia Command
     *
     * @param CommandInterface $command
     * @return string
     */
    public function inflect(CommandInterface $command);
}
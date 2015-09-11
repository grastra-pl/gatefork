<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-02
 * Time: 00:31
 */

namespace Gate\Command;


class NameInflector implements InflectorInterface
{
    /**
     * Znajduje Handler dla polecenia Command
     *
     * @param Command $command
     * @return string
     */
    public function inflect(CommandInterface $command)
    {
        return str_replace('Command', 'Handler', get_class($command));
    }
}
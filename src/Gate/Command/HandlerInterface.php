<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-01
 * Time: 22:49
 */

namespace Gate\Command;

interface HandlerInterface
{
    /**
     * Handler dla obiektu Command
     *
     * @param Command $command
     * @param Object $receiver
     * @return void
     */

    public function handle(CommandInterface $command,$receiver=null);
}
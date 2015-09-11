<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-02
 * Time: 01:41
 */

namespace Gate\Handler;


use Gate\Command\Command;
use Gate\Command\CommandInterface;

class BaseHandler implements \Gate\Command\HandlerInterface
{
    /**
     * Handler dla obiektu Command
     *
     * @param Command $command
     * @return void
     */
    public function handle(\Gate\Command\CommandInterface $command,$receiver=null)
    {
        // TODO: Implement handle() method.
    }

}
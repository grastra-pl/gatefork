<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-02
 * Time: 01:44
 */

namespace Gate\Handler;

use Gate\Command\HandlerInterface;

class CreateAccount extends BaseHandler implements HandlerInterface
{

    public function handle(\Gate\Command\CommandInterface $command,$receiver=null)
    {
        $receiver->createAccount($command->getId(),$command->getName());
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-02
 * Time: 01:32
 */

namespace Gate\Handler;

use Gate\Command\HandlerInterface;

class CreateCharacter extends BaseHandler implements HandlerInterface
{

    public function handle(\Gate\Command\CommandInterface $command,$receiver=null)
    {
        $receiver->createCharacter($command->id,$command->name);
    }
}
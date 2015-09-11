<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-03
 * Time: 00:42
 */

namespace Gate\Handler;
use Gate\Command\HandlerInterface;

class AddCharacter2Account extends BaseHandler implements HandlerInterface
{

    public function handle(\Gate\Command\CommandInterface $command,$receiver=null)
    {
        $receiver->addCharacter2Account($command->characterId,$command->accountId);
    }
}
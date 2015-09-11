<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-03
 * Time: 00:40
 */

namespace Gate\Command;


class AddCharacter2Account extends AbstractCommand implements  CommandInterface
{
    public $accountId;
    public $characterId;

    function __construct($characterId,$accountId)
    {
        $this->characterId=$characterId;
        $this->accountId=$accountId;
        $this->type='account';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-02
 * Time: 01:32
 */

namespace Gate\Command;


use Gate\Account\AccountInterface;

class CreateCharacter extends AbstractCommand implements  CommandInterface
{
    public $id;
    public $name;
    public $type;

    function __construct($id,$name)
    {
        $this->id=$id;
        $this->name=$name;
        $this->type='character';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-01
 * Time: 22:25
 */

namespace Gate\Command;


interface CommandInterface extends \Gate\Common\NamedEntityInterface
{
    public function getType();
    public function setType($type);
    public function getInvoker();
    public function setInvoker($invoker);
    public function getParams();
    public function setParams($params);
    public function getReceiver();
    public function setReceiver($receiver);
    public function rollback();
}
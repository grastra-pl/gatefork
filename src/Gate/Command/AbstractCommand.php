<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-01
 * Time: 08:08
 */

namespace Gate\Command;


class AbstractCommand extends \Gate\Common\AbstractNamedEntity implements CommandInterface
{

    protected $params;
    protected $receiver;
    protected $invoker;
    protected $type;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type=$type;
    }


    /**
     * @return mixed
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param mixed $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @return mixed
     */
    public function getInvoker()
    {
        return $this->invoker;
    }

    /**
     * @param mixed $invoker
     */
    public function setInvoker($invoker)
    {
        $this->invoker = $invoker;
    }

    public function getParams()
    {
        return $this -> params;
    }

    public function setParams($params)
    {
        $this -> params = $params;
    }

    public function rollback()
    {
        // do cofania komend
        // domyślnie komendy nie da się cofnąć (return false)
        // jeśli cofnięcie komendy będzie udane, zwracać powinno true
        return false;
    }

}
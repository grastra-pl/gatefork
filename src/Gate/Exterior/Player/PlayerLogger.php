<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-05-31
 * Time: 23:07
 *
 * Dekorator logujący
 *
 */

namespace Gate\Exterior\Player;


class PlayerLogger implements PlayerInterface
{
    use \Gate\Common\LoggerDecoratorTrait;

    public function __construct(PlayerInterface $decoratedPlayer,\Psr\Log\LoggerInterface $logger, $logLevel=\Gate\Common\LogLevels::WRITEONLY)
    {
        $this->logger = $logger;
        $this->decorated = $decoratedPlayer;
        $this->logLevel = $logLevel;
    }



    public function getId()
    {
        return $this->decorate(__FUNCTION__,func_get_args());
    }

    public function getName()
    {
        return $this->decorate(__FUNCTION__,func_get_args());
    }

    public function setId($id)
    {
        return $this->decorate(__FUNCTION__,func_get_args());
    }

    public function setName($name)
    {
        return $this->decorate(__FUNCTION__,func_get_args());
    }

    public function getOrigin()
    {
        return $this->decorate(__FUNCTION__,func_get_args());
    }

    public function setOrigin($origin)
    {
        return $this->decorate(__FUNCTION__,func_get_args());
    }

    public function isActive()
    {
        return $this->decorate(__FUNCTION__,func_get_args());
    }

    public function isLogged()
    {
        return $this->decorate(__FUNCTION__,func_get_args());
    }

}
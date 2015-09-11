<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-01
 * Time: 00:37
 */

namespace Gate\Common;


trait LoggerDecoratorTrait {

    protected $logger;
    protected $decorated;
    protected $logLevel;

    protected function decorate($method,$args)
    {
        $minLogLevel=\Gate\Common\LogLevels::ALL;
        if  ((strpos($method,'get')!==0) && (strpos($method,'is')!==0)) {
            $minLogLevel=\Gate\Common\LogLevels::WRITEONLY;
        }

        if ($this->logLevel >= $minLogLevel) {
            $argsConcated='';
            if (is_array($args)) {
                $argsConcated=implode(',',$args);
            }

            $this->logger->info($method.' w '.get_class($this->decorated).$argsConcated);
        }

        return $this->decorated->$method($args);
    }
}
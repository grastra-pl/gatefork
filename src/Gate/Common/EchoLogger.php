<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-01
 * Time: 00:43
 *
 * tylko do sprawdzenia logowania
 * później wrzucimy w to miejsce Monologa albo Analoga
 *
 *
 */

namespace Gate\Common;


class EchoLogger extends \Psr\Log\AbstractLogger
{
    public function log($level, $message, array $context = array())
    {
        echo('echowanie: '.$level.' '.$message.' '.implode(",",$context));
    }
}
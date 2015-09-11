<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-02
 * Time: 23:33
 */

namespace Gate\Command;


interface CommandBusInterface {

    /**
     * Wykonuje polecenie Command przez przesłanie go do Handlera
     *
     * @param CommandInterface $command
     * @return void
     */
    public function execute(CommandInterface $command);
}
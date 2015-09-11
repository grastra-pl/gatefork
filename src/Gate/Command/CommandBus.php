<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-02
 * Time: 00:24
 */

namespace Gate\Command;


class CommandBus implements CommandBusInterface
{
    protected $container;
    protected $inflector;
    protected $receivers;

    /**
     * Konstruktor Command-a
     * @param array $settings
     * @return void
     */
    public function __construct($settings)
    {
        $this->container = new $settings['container'];
        $this->inflector = new $settings['inflector'];
        $this->receivers = $settings['receivers'];
    }

    /**
     * Wykonuje polecenie Command przez przesłanie go do Handlera
     *
     * @param CommandInterface $command
     * @return void
     */
    public function execute(CommandInterface $command)
    {
        $this->handler($command)->handle($command,$this->receiver($command));
    }

    /**
     * Pobiera właściwy Command Handler
     *
     * @return mixed
     */
    private function handler(CommandInterface $command)
    {
        $class = $this->inflector->inflect($command);

        return $this->container->make($class);
    }

    /**
     * Pobiera właściwy Command Receiver
     *
     * @return mixed
     */
    private function receiver(CommandInterface $command)
    {
        $class = $this->receivers[$command->getType()];

        return $this->container->make($class);
    }
}
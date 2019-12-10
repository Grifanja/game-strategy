<?php


namespace classes;


use interfaces\MoveInterface;
use interfaces\ShotInterface;
use interfaces\WarMachineInterface;

/**
 * Class Tank
 * @package classes
 */
class Tank implements WarMachineInterface,MoveInterface,ShotInterface
{
    /**
     *  движимся
     */
    public function moving(): void
    {
        // TODO: Implement moving() method.
    }

    /**
     * стреляем
     */
    public function shoot(): void
    {
        // TODO: Implement shoot() method.
    }
}
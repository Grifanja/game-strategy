<?php


namespace classes;


use interfaces\MoveInterface;
use interfaces\ShotInterface;
use interfaces\SoldierInterface;

/**
 * Class Soldier
 * @package classes
 */
class Soldier implements  SoldierInterface, MoveInterface, ShotInterface
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

    /**
     * @return int
     */
    public function getId(): int
    {
        // TODO: Implement getId() method.
    }
}
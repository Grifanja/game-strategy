<?php


namespace classes;

use interfaces\MoveInterface;
use interfaces\ShotInterface;
use interfaces\SoldierInterface;
use interfaces\WarMachineInterface;

/**
 * Class BMP
 * @package classes
 */
class BMP implements WarMachineInterface, MoveInterface, ShotInterface
{
    /**
     * @var Soldier[]
     */
    protected $listSoldersForTransportation = [];

    /**
     * @return Soldier[]
     */
    public function getListSoldersForTransportation(): array
    {
        return $this->listSoldersForTransportation;
    }

    /**
     * @param Soldier[] $listSoldersForTransportation
     */
    public function setListSoldersForTransportation(array $listSoldersForTransportation): void
    {
        $this->listSoldersForTransportation = $listSoldersForTransportation;
    }

    /**
     * @return Soldier[]
     */
    public function addSolderToBMP(SoldierInterface $solder): array
    {
        $this->listSoldersForTransportation[$solder->getId()] = $solder;
    }

    /**
     * @param Soldier[] $listSoldersForTransportation
     */
    public function removeSoldersFromBMP(int $idSolder): void
    {
        unset($this->listSoldersForTransportation[$idSolder]);
    }

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
<?php

declare(strict_types=1);


namespace Heroes;


class Attacker implements HeroInterface
{
    private $healthPoints;
    private $defence;
    private $attack;

    public function __construct(int $healthPoints, int $defence, int $attack)
    {
        $this->healthPoints = $healthPoints;
        $this->defence = $defence;
        $this->attack = $attack;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function getDefence(): int
    {
        return $this->defence;
    }

    public function getHealthPoints(): int
    {
        return $this->healthPoints;
    }

    public function setHealthPoints(int $healthPoints)
    {
        $this->healthPoints = $healthPoints;
    }
}
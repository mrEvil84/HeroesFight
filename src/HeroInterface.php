<?php

namespace Heroes;

interface HeroInterface
{
    public function getAttack(): int;

    public function getDefence(): int;

    public function getHealthPoints(): int;

    public function setHealthPoints(int $healthPoints);
}
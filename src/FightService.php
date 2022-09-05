<?php

declare(strict_types=1);


namespace Heroes;


class FightService
{
    public function fight(HeroInterface $attacker, HeroInterface $defender)
    {
        $damage = DamageCalculator::calculateDamage($attacker, $defender);

        $defenderHealthPoints = $defender->getHealthPoints() - $damage;

        $defender->setHealthPoints($defenderHealthPoints);

        return $defenderHealthPoints;
    }
}
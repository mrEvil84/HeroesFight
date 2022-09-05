<?php

declare(strict_types=1);


namespace Tests;


use Heroes\Attacker;
use Heroes\Defender;
use Heroes\FightService;
use PHPUnit\Framework\TestCase;

class FightServiceTest extends TestCase
{
    /**
     * @dataProvider getHeroesData
     */
    public function testFight(array $data)
    {
        $sut = new FightService();

        $defenderHealthPoints = $sut->fight(
            new Attacker($data['attacker']['health'], $data['attacker']['defence'], $data['attacker']['attack']),
            new Defender($data['defender']['health'], $data['attacker']['defence'], $data['attacker']['attack'])
        );

        $this->assertIsInt($defenderHealthPoints);
    }

    public function getHeroesData(): array
    {
        return [
            [
                [
                    'attacker' => [
                        'health' => 80,
                        'defence' => 60,
                        'attack' => 70,
                    ],
                    'defender' => [
                        'health' => 90,
                        'defence' => 80,
                        'attack' => 30,
                    ],
                ],
            ],
            [
                [
                    'attacker' => [
                        'health' => 40,
                        'defence' => 20,
                        'attack' => 100,
                    ],
                    'defender' => [
                        'health' => 98,
                        'defence' => 90,
                        'attack' => 20,
                    ],
                ],
            ],

        ];
    }
}
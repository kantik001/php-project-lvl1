<?php

namespace Brain\Games\Gcd;

use function Brain\Engine\runGame;

const GAME_ASK = "Find the greatest common divisor of given numbers";
use const Brain\Engine\ROUNDS_COUNT;

function gcd(int $number1, int $number2)
{
    $least = min($number1, $number2);
    for ($checkNumber = $least; $checkNumber > 1; $checkNumber--) {
        if ($number1 % $checkNumber === 0 && $number2 % $checkNumber === 0) {
                return (string) $checkNumber;
        }
    }

        return 1;
}

function startGcdGame(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
        $question = "{$number1} {$number2}";
        $answer = (string) gcd($number1, $number2);
        $gameData[] = [$question, $answer];
    };

    runGame($gameData, GAME_ASK);
}

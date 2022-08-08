<?php

namespace Brain\Games\Games\Gcd;

use function Brain\Games\Engine\runGame;

const GAME_ASK = "Find the greatest common divisor of given numbers";

function gcd(int $number1, int $number2): string
{
    return ($number1 % $number2) ? gcd($number2, $number1 % $number2) : $number2;
}

function startGcdGame(): void
{
    $getGameData = [];
    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
        $question = "{$number1} {$number2}";
        $answer = (string) gcd($number1, $number2);
        $getGameData[] = [$question, $answer];
    };

    runGame($getGameData, GAME_ASK);
}

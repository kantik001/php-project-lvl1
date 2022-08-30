<?php

namespace Brain\Games\Prime;

use function Brain\Engine\runGame;

const GAME_TASKK = "Answer 'yes' if given number is prime. Otherwise answer 'no'";
use const Brain\Engine\ROUNDS_COUNT;
function findPrime(int $number): bool
{
    if ($number <= 1) {
                return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
                return false;
        }
    }
        return true;
}
function startPrimeGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(1, 99);
        $answer = findPrime($question) ? 'yes' : 'no';
        $gameData[] = [$question, $answer];
    };
    runGame($gameData, GAME_TASKK);
}

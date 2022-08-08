<?php

namespace Brain\Games\Games\Prime;

use function Brain\Games\Engine\runGame;

const GAME_TASKK = "Answer 'yes' if given number is prime. Otherwise answer 'no'";

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
    $getGameData = [];
    for ($i = 0; $i < 3; $i++) {
        $question = rand(1, 99);
        $answer = findPrime($question) ? 'yes' : 'no';
        $getGameData[] = [$question, $answer];
    };
    runGame($getGameData, GAME_TASKK);
}

<?php

namespace Brain\Games\Games\Prime;

use function Brain\Games\Engine\runGame;

const GAME_TASKK = "Answer 'yes' if given number is prime. Otherwise answer 'no'";

function findPrime($number): bool
{
    if ($number <= 1 || $number % 2 === 0 || $number % 3 === 0) {
                return false;
    } elseif ($number === 2 || $number === 3) {
            return true;
    } else {
        for ($i = 5; $i < $number; $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
                    return true;
    }
}
function startPrimeGame()
{
    $getGameData = function () {
        $question = rand(1, 99);
        $answer = findPrime($question) ? 'yes' : 'no';
        return [$question, $answer];
    };
    runGame($getGameData, GAME_TASKK);
}

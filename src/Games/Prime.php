<?php

namespace Brain\Games\Games\Prime;

use function Brain\Games\Engine\runGame;

const GAME_TASKK = "Answer 'yes' if given number is prime. Otherwise answer 'no'";

function findPrime($num): bool
{
	$result = gmp_prob_prime($num);
	return $result;
}

function startPrimeGame()
{
    $getGameData = function () {
        $question = rand(1, 100);
        $answer = findPrime($question) ? 'yes' : 'no';
        return [$question, $answer];
    };
    runGame($getGameData, GAME_TASKK);
}

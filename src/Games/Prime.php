<?php

namespace Brain\Games\Games\Prime;

use function Brain\Games\Engine\runGame;

const GAME_TASKK = "Answer 'yes' if given number is prime. Otherwise answer 'no'";

function findPrime($num): bool
{
	if($num < 2) {
		return false;
	}
	for ($i = 2; $i <= sqrt($num); $i ++) {
		if ($number % $i == 0) {
			return false;
		}
	}
	return true;
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

<?php

namespace Brain\Games\Games\Gcd;

use function Brain\Games\Engine\runGame;

const GAME_ASK = "Find the greatest common divisor of given numbers";

function gcd($number1, $number2): string
{
	$gcd = gmp_gcd($number1, $number2);
	return $gcd;
}

function startGcdGame()
{
	$getGameData = function() {
		$number1 = rand(1, 10);
		$number2 = rand(1, 10);
		$question = "{$number1} {$number2}";
		$answer = gcd($number1, $number2);
		return [$question, $answer];
	};

	runGame($getGameData, GAME_ASK);
}

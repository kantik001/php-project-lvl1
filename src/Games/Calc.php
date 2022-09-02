<?php

namespace Brain\Games\Calc;

use function Brain\Engine\runGame;

use Exception;

use const Brain\Engine\ROUNDS_COUNT;

const GAME_ASK = 'What is the result of the expression?';

const OPERATORS = ["+", "-", "*"];

function calculate(string $operator, int $num1, int $num2)
{
    switch ($operator) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        default:
            throw new Exception('Error');
    }
}

function startCalcGame(): void
{
    $gameData = [];
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $operator = OPERATORS[array_rand(OPERATORS, 1)];
        $question = "{$num1} {$operator} {$num2}";
        $answer = (string) calculate($operator, $num1, $num2);
        $gameData[] = [$question, $answer];
    };

    runGame($gameData, GAME_ASK);
}

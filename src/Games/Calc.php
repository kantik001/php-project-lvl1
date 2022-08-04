<?php

namespace Brain\Games\Games\Calc;

use function Brain\Games\Engine\runGame;

const GAME_TASK = 'What is the result of the expression?';
const OPERATORS = ["+", "-", "*"];

function calculate(string $operator,int $num1, int $num2): string
{
    switch ($operator) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
    }
}

function startCalcGame()
{
    $getGameData = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $operator = OPERATORS[array_rand(OPERATORS, 1)];
        $question = "{$num1} {$operator} {$num2}";
        $answer = calculate($operator, $num1, $num2);
        return [$question, $answer];
    };

    runGame($getGameData, GAME_TASK);
}

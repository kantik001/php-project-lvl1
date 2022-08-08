<?php

namespace Brain\Games\Games\Calc;

use function Brain\Games\Engine\runGame;

const GAME_TASK = 'What is the result of the expression?';
const OPERATORS = ["+", "-", "*"];
const NUM_ROUNDS = 3;

function calculate(string $operator, int $num1, int $num2)
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

function startCalcGame(): void
{
    $getGameData = [];
    for ($i = 1; $i <= NUM_ROUNDS; $i++) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $operator = OPERATORS[array_rand(OPERATORS, 1)];
        $question = "{$num1} {$operator} {$num2}";
        $answer = (string) calculate($operator, $num1, $num2);
        $getGameData[] = [$question, $answer];
    };

    runGame($getGameData, GAME_TASK);
}

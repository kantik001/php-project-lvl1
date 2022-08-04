<?php

namespace Brain\Games\Engine;

use function cli\prompt;
use function cli\line;

const ROUNDS_COUNT = 3;

function runGame(callable $gameData, string $gameTask)
{
    line('Welcome to the Brain Games!');
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    line($gameTask);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$question, $answer] = $gameData();
        line("Question: $question");
        $playerAnswer = prompt('Your answer', '');

        if ($playerAnswer === $answer) {
            line('Correct!');
        } else {
            line("'$playerAnswer' is wrong answer ;(. Correct answer was '$answer'.");
            line("Let's try again, $playerName!");
            return;
        }
    }

    line("Congratulations, $playerName!");
}

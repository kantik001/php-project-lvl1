<?php

namespace Brain\Engine;

use function cli\prompt;
use function cli\line;

const ROUNDS_COUNT = 3;

function runGame(array $gameData, string $gameTask): void
{
    line('Welcome to the Brain Games!');
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    line($gameTask);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$question, $answer] = $gameData[$i];
        line("Question: $question");
        $playerAnswer = prompt('Your answer', '');

        if ($playerAnswer !== $answer) {
            line("'$playerAnswer' is wrong answer ;(. Correct answer was '$answer'.");
            line("Let's try again, $playerName!");
            return;
        }
        line('Correct!');
    }
    line("Congratulations, $playerName!");
}

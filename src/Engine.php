<?php

namespace Brain\Games\Engine;

use function cli\prompt;
use function cli\line;

function run($rule, $gameTask)
{
    line('Welcome to the Brain Game!');
    line($rule);
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    
    for ($i = 0; $i < 3; $i++) {
        [$question, $answer] = $gameTask();
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

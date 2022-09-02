<?php

namespace Brain\Games\Progression;

use function Brain\Engine\runGame;

use const Brain\Engine\ROUNDS_COUNT;

const GAME_ASK = "What number is missing in the progression?";

function startProgressionGame(): void
{
    $gameData = [];
    for ($i = 0; $i < 3; $i++) {
        $progression = [];
        $firstNum = rand(0, 5);
        $step = rand(1, 5);
        $progressionLength = 10;
            for ($index = 0; $index < $progressionLength; $index++) {
                $progression[] = $firstNum + $step * $index;
            }

        $hiddenIndex = rand(0, $progressionLength - 1);
        $answer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = "..";

        $question = implode(' ', $progression);
        $answer = (string) $answer;
        $gameData[] = [$question, $answer];
    }

    runGame($gameData, GAME_ASK);
}

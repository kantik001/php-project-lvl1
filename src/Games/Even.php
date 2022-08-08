<?php

namespace Brain\Games\Games\Even;

use function Brain\Games\Engine\runGame;

const GAME_TASK = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $int): bool
{
    return $int % 2 === 0;
}

function startEvenGame(): void
{
    $getGameData = [];
    $roundNum = 3;
    for ($i = 1; $i <= $roundNum; $i++) {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        $getGameData[] = [$question, $answer];
    };

    runGame($getGameData, GAME_TASK);
}

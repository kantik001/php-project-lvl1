<?php

namespace Brain\Games\Games\Even;

use function Brain\Games\Engine\runGame;

const GAME_TASK = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($int): bool
{
    return $int % 2 === 0;
}

function startEvenGame(): array
{
    $getGameData = function () {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        return [$question, $answer];
    };

    runGame($getGameData, GAME_TASK);
}

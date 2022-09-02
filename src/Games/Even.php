<?php

namespace Brain\Games\Even;

use function Brain\Engine\runGame;

const GAME_ASK = 'Answer "yes" if the number is even, otherwise answer "no".';

use const Brain\Engine\ROUNDS_COUNT;

function isEven(int $int): bool
{
    return $int % 2 === 0;
}

function startEvenGame(): void
{
    $gameData = [];
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        $gameData[] = [$question, $answer];
    };

    runGame($gameData, GAME_ASK);
}

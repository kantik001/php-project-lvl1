<?php

namespace Brain\Games\Games\Progression;

use function Brain\Games\Engine\runGame;

const GAME_QUE = "What number is missing in the progression?";

const PROGRESSION = 10;

function findProgression($firstNum, $step, $lengthProgr)
{
        $result = [];
    for ($i = 0; $i < $lengthProgr; $i++) {
            $result[] = $firstNum + $step * $i;
    }
        return $result;
}

function makeQuestion($member, $progression, $space = '..')
{
        $progression[$member] = $space;
        return $progression;
}

function startProgressionGame()
{
        $getGameData = function () {
                $firstNum = rand(0, 5);
                $step = rand(2, 5);
                $member = rand(0, PROGRESSION - 1);
                $progression = findProgression($firstNum, $step, PROGRESSION);
                $answer = (string)$progression[$member];
                $question = implode(' ', makeQuestion($member, $progression));
                return [$question, $answer];
        };
        runGame($getGameData, GAME_QUE);
}
<?php

namespace Brain\Games\Games\Progression;

use function Brain\Games\Engine\runGame;

const GAME_QUE = "What number is missing in the progression?";

function startProgressionGame(): void
{
    $getGameData = [];
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
	      $getGameData[] = [$question, $answer];
    
    }         
        runGame($getGameData, GAME_QUE);
}

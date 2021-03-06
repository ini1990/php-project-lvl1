<?php

namespace BrainGames\Games\Progression;

use const BrainGames\ROUNDS_COUNT;

function run()
{
    $description = 'What number is missing in the progression?';
    $questions = [];
    $progressionSize = 10;
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $start = rand(1, 20);
        $difference = rand(2, 10);
        $progression = getProgression($start, $difference, $progressionSize);
        $index = array_rand($progression);
        $correctAnswer = $progression[$index];
        $progression[$index] = '..';
        $question = implode(' ', $progression);
        $questions[] = [$question, $correctAnswer];
    }
    \BrainGames\play($description, $questions);
}

function getProgression($start, $difference, $progressionSize)
{
    $stepsAmount = $progressionSize - 1;
    $end = $start + ($difference * $stepsAmount);
    return range($start, $end, $difference);
}

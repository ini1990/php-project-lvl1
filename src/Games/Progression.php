<?php

namespace BrainGames\Games\Progression;

use const BrainGames\ROUNDS_COUNT;

function run()
{
    $description = 'What number is missing in the progression?';
    $questions = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $start = rand(1, 20);
        $step = rand(2, 10);
        $amount = 9;
        $end = $start + ($step * $amount);
        $progression = range($start, $end, $step);
        $index = array_rand($progression);
        $correctAnswer = $progression[$index];
        $progression[$index] = '..';
        $question = implode(' ', $progression);
        $questions[] = [$question, $correctAnswer];
    }
    \BrainGames\play($description, $questions);
}

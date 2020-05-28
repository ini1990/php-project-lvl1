<?php

namespace BrainGames\Games\Progression;

use const BrainGames\ROUNDS_COUNT;

function run()
{
    $rules = 'What number is missing in the progression?';
    $questions = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $step = rand(2, 9);
        $start = rand(1, 11);
        $progression = array_slice(range($start, 100, $step), 0, 10);
        $index = array_rand($progression);
        $correctAnswer = $progression[$index];
        $progression[$index] = '..';
        $question = implode(' ', $progression);
        $questions[] = [$question, $correctAnswer];
    }
    \BrainGames\play($rules, $questions);
}

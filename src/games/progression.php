<?php

namespace BrainGames\Games\Progression;

function run()
{
    $rules = 'What number is missing in the progression?';
    $questions = [];
    for ($i = 0; $i < 3; $i++) {
        $step = rand(2, 9);
        $start = rand(1, 11);
        $progression = array_slice(range($start, 100, $step), 0, 10);
        $index = array_rand($progression);
        $correct = $progression[$index];
        $progression[$index] = '..';
        $question = implode(' ', $progression);
        $questions[] = [$question, $correct];
    }
    \BrainGames\play($rules, $questions);
}

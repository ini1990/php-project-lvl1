<?php

namespace BrainGames\Games\Even;

use const BrainGames\ROUNDS_COUNT;

function run()
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no"';
    $questions = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(0, 100);
        $correctAnswer = ($question % 2 == 0) ? 'yes' : 'no';
        $questions[] = [$question, $correctAnswer];
    }
    \BrainGames\play($description, $questions);
}

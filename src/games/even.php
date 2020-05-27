<?php

namespace BrainGames\Games\Even;

function run()
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no"';
    $questions = [];
    for ($i = 0; $i < 3; $i++) {
        $question = rand(0, 200);
        $correct = ($question % 2 == 0) ? 'yes' : 'no';
        $questions[] = [$question, $correct];
    }
    \BrainGames\play($rules, $questions);
}

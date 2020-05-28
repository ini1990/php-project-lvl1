<?php

namespace BrainGames\Games\Prime;

use const BrainGames\ROUNDS_COUNT;

function run()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $questions = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = rand(2, 100);
        $question = "{$number}";
        $correctAnswer = isPrime($number) ? 'yes' : 'no';
        $questions[] = [$question, $correctAnswer];
    }
    \BrainGames\play($rules, $questions);
}

function isPrime($n)
{
    for ($x = 2; $x < $n; $x++) {
        if ($n % $x == 0) {
            return false;
        }
    }
    return true;
}

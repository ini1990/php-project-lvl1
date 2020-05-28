<?php

namespace BrainGames\Games\Prime;

function run()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $questions = [];
    for ($i = 0; $i < 3; $i++) {
        $number = rand(2, 100);
        $question = "{$number}";
        $correct = isPrime($number) ? 'yes' : 'no';
        $questions[] = [$question, $correct];
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

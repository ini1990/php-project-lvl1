<?php

namespace BrainGames\Games\Gcd;

function run()
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $questions = [];
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $question = "{$a} {$b}";
        $correct = gcd($a, $b);
        $questions[] = [$question, $correct];
    }
    \BrainGames\play($rules, $questions);
}

function gcd(int $a, int $b): int
{
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return $a;
}

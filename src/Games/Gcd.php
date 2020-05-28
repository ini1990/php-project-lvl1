<?php

namespace BrainGames\Games\Gcd;

use const BrainGames\ROUNDS_COUNT;

function run()
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $questions = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $question = "{$a} {$b}";
        $correctAnswer = getGcd($a, $b);
        $questions[] = [$question, $correctAnswer];
    }
    \BrainGames\play($rules, $questions);
}

function getGcd(int $a, int $b): int
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

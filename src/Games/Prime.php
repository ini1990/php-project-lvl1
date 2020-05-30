<?php

namespace BrainGames\Games\Prime;

use const BrainGames\ROUNDS_COUNT;

function run()
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $questions = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = rand(0, 100);
        $question = (string) $number;
        $correctAnswer = isPrime($number) ? 'yes' : 'no';
        $questions[] = [$question, $correctAnswer];
    }
    \BrainGames\play($rules, $questions);
}

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($devisor = 2, $upperBorder = $number / 2; $devisor <= $upperBorder; $devisor++) {
        if ($number % $devisor == 0) {
            return false;
        }
    }
    return true;
}

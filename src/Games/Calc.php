<?php

namespace BrainGames\Games\Calc;

use const BrainGames\ROUNDS_COUNT;

function run()
{
    $rules = 'What is the result of the expression?';
    $operators = ['+', '-', '*'];
    $questions = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $value1 = rand(0, 200);
        $value2 = rand(0, 200);
        $operator = $operators[array_rand($operators)];
        $question = "{$value1} {$operator} {$value2}";
        $correctAnswer = calc($value1, $operator, $value2);
        $questions[] = [$question, $correctAnswer];
    }
    \BrainGames\play($rules, $questions);
}

function calc($value1, $operator, $value2)
{
    switch ($operator) {
        case '+':
            return $value1 + $value2;
        case '-':
            return $value1 - $value2;
        case '*':
            return $value1 * $value2;
    }
}

<?php

namespace BrainGames\Games\Calc;

function run()
{
    $rules = 'What is the result of the expression?';
    $operators = ['+', '-', '*'];
    $questions = [];
    for ($i = 0; $i < 3; $i++) {
        $value1 = rand(0, 200);
        $value2 = rand(0, 200);
        $operator = $operators[array_rand($operators)];
        $question = "{$value1} {$operator} {$value2}";
        $correct = calc($value1, $operator, $value2);
        $questions[] = [$question, $correct];
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

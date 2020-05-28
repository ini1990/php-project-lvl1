<?php

namespace BrainGames;

const ROUNDS_COUNT = 3;

use function cli\line;
use function cli\prompt;

function play($rules, $questions)
{
    line('Welcome to the Brain Game!');
    line("{$rules}");
    line();
    $name = prompt('May I have your name?');
    line("Hi, %s!", $name);
    line();

    $congratulations = true;
    foreach ($questions as [$question, $correctAnswer]) {
        line("Question: %s", $question);
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, %s!", $name);
            $congratulations = false;
            break;
        }
    }
    if ($congratulations) {
        line("Congratulations, %s!", $name);
    }
}

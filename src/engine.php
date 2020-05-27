<?php

namespace BrainGames;

const ROUNDS = 3;

use function cli\line;
use function cli\prompt;

function play($rules, $questions)
{
    line('Welcome to the Brain Game!');
    line("{$rules}");
    $name = prompt('May I have your name?');
    line("Hi, %s!", $name);

    $congratulations = true;
    foreach ($questions as [$question, $correct]) {
        line("Question: %s", $question);
        $answer = prompt('Your answer');
        if ($answer == $correct) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct}'.");
            line("Let's try again, %s!", $name);
            $congratulations = false;
            break;
        }
    }
    if ($congratulations) {
        line("Congratulations, %s!", $name);
    }
}

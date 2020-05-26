<?php

namespace BrainGames\Even;

use function Cli\line;
use function Cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hi, %s!", $name);

    $steps = 0;
    while ($steps < 3) {
        $value = rand(0, 200);
        line("Question: %s", $value);
        $answer = prompt('Your answer');
        $correct = ($value % 2 == 0) ? 'yes' : 'no';
        if ($answer == $correct) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct}'.");
            line("Let's try again, %s!", $name);
            break;
        }
        $steps++;
    }
    if ($steps == 3) {
        line("Congratulations, %s!", $name);
    }
}

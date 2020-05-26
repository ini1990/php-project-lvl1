<?php

namespace BrainGames\Cli;

use function Cli\line;
use function cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hi, %s!", $name);
}

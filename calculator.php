<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use src\phpreboot\calculator\NewCalculator;

$application = new Application();


// ... register commands
$application->add(new NewCalculator());

$application->run();

?>  
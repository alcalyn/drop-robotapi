<?php

require_once __DIR__.'/config.php';

echo 'Lets go forward...', PHP_EOL;

$robot->forward();

sleepMoveTime();

$robot->stop();

echo 'Ok, Im now stopped.', PHP_EOL;

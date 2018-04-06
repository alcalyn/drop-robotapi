<?php

require_once __DIR__.'/config.php';

echo 'Lets turn left...', PHP_EOL;

$robot->left();

sleepRotateTime();

$robot->stop();

echo 'Ok, Im now stopped.', PHP_EOL;

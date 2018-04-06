<?php

require_once __DIR__.'/config.php';

echo 'Lets turn right...', PHP_EOL;

$robot->right();

sleepRotateTime();

$robot->stop();

echo 'Ok, Im now stopped.', PHP_EOL;

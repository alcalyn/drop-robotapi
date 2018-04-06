#!/usr/bin/php
<?php

require_once __DIR__.'/../src/config.php';

echo 'Lets go backward...', PHP_EOL;

$robot->backward();

sleepMoveTime();

$robot->stop();

echo 'Ok, Im now stopped.', PHP_EOL;

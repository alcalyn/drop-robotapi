#!/usr/bin/php
<?php

require_once __DIR__.'/autoload.php';

use Drop\RobotApi\Api;

$api = new Api();

echo 'Lets turn left...', PHP_EOL;

$api->left();

$api->sleepRotateTime();

$api->stop();

echo 'Ok, Im now stopped.', PHP_EOL;

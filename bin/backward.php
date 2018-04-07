#!/usr/bin/php
<?php

require_once __DIR__.'/autoload.php';

use Drop\RobotApi\Api;

$api = new Api();

echo 'Lets go backward...', PHP_EOL;

$api->backward();

$api->sleepMoveTime();

$api->stop();

echo 'Ok, Im now stopped.', PHP_EOL;

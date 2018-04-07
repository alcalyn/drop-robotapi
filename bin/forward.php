#!/usr/bin/php
<?php

require_once __DIR__.'/autoload.php';

use Drop\RobotApi\Api;

$api = new Api();

echo 'Lets go forward...', PHP_EOL;

$api->forward();

$api->sleepMoveTime();

$api->stop();

echo 'Ok, Im now stopped.', PHP_EOL;

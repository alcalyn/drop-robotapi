<?php

$autoloadLocations = [
    // In case library is the project and vendor are installed
    __DIR__.'/../vendor/autoload.php',

    // In case library is loaded as vendor
    __DIR__.'/../../../autoload.php',
];

$found = false;

foreach ($autoloadLocations as $autoloadLocation) {
    if (file_exists($autoloadLocation)) {
        $found = true;
        require_once($autoloadLocation);
    }
}

if (!$found) {
    throw new Exception('Impossible to autoload dependencies. Are composer dependencies installed ?');
}

$envFile = __DIR__.'/../.env';

foreach ($argv as $arg) {
    if (preg_match('/^--env=(.*)$/', $arg, $matches)) {
        $envFile = realpath($matches[1]);
    }
}

if (file_exists($envFile)) {
    $dotenv = new \Dotenv\Dotenv(dirname($envFile), basename($envFile));
    $dotenv->load();
} else {
    if (!getenv('PIN_MOTOR_LEFT_EN')) {
        trigger_error(
            'Environment variables seems to not be loaded. '
            .'Be sure to provide .env file with --env=path/to/.env',
            E_USER_WARNING
        );
    }
}

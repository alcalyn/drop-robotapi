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

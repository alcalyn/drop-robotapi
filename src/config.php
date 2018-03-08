<?php

require_once __DIR__.'/../vendor/autoload.php';

use Calcinai\PHPi\Factory as BoardFactory;
use Calcinai\PHPi\Pin\PinFunction;

$dotenv = new Dotenv\Dotenv(__DIR__.'/..');
$dotenv->load();

$board = BoardFactory::create();

$motorLeft = new Motor(
    $board->getPin(intval(getenv('PIN_MOTOR_LEFT_EN')))->setFunction(PinFunction::OUTPUT),
    $board->getPin(intval(getenv('PIN_MOTOR_LEFT_A')))->setFunction(PinFunction::OUTPUT),
    $board->getPin(intval(getenv('PIN_MOTOR_LEFT_B')))->setFunction(PinFunction::OUTPUT)
);

$motorRight = new Motor(
    $board->getPin(intval(getenv('PIN_MOTOR_RIGHT_EN')))->setFunction(PinFunction::OUTPUT),
    $board->getPin(intval(getenv('PIN_MOTOR_RIGHT_A')))->setFunction(PinFunction::OUTPUT),
    $board->getPin(intval(getenv('PIN_MOTOR_RIGHT_B')))->setFunction(PinFunction::OUTPUT)
);

$robot = new Robot($motorLeft, $motorRight);

function sleepMoveTime() {
    usleep(1E6 * floatval(getenv('MOVE_TIME')));
}

function sleepRotateTime() {
    usleep(1E6 * floatval(getenv('ROTATE_TIME')));
}

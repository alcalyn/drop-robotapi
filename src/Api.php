<?php

namespace Drop\RobotApi;

use Calcinai\PHPi\Factory as BoardFactory;
use Calcinai\PHPi\Pin\PinFunction;

class Api
{
    public function __construct()
    {
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

        $this->robot = new Robot($motorLeft, $motorRight);
    }

    public function forward()
    {
        $this->robot->forward();
    }

    public function backward()
    {
        $this->robot->backward();
    }

    public function left()
    {
        $this->robot->left();
    }

    public function right()
    {
        $this->robot->right();
    }

    public function stop()
    {
        $this->robot->stop();
    }

    public function sleepMoveTime() {
        usleep(1E6 * floatval(getenv('MOVE_TIME')));
    }

    public function sleepRotateTime() {
        usleep(1E6 * floatval(getenv('ROTATE_TIME')));
    }
}

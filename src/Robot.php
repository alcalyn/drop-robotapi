<?php

namespace Drop\RobotApi;

class Robot
{
    /**
     * @var Motor
     */
    private $left;

    /**
     * @var Motor
     */
    private $right;

    /**
     * @param Motor $left
     * @param Motor $right
     */
    public function __construct(Motor $left, Motor $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function stop()
    {
        $this->left->stop();
        $this->right->stop();
    }

    public function forward()
    {
        $this->left->forward();
        $this->right->forward();
    }

    public function backward()
    {
        $this->left->backward();
        $this->right->backward();
    }

    public function left()
    {
        $this->left->stop();
        $this->right->forward();
    }

    public function right()
    {
        $this->left->forward();
        $this->right->stop();
    }
}

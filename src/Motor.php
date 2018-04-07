<?php

namespace Drop\RobotApi;

use Calcinai\PHPi\Pin;

class Motor
{
    /**
     * @var Pin
     */
    private $en;

    /**
     * @var Pin
     */
    private $a;

    /**
     * @var Pin
     */
    private $b;

    /**
     * @param Pin $en
     * @param Pin $a
     * @param Pin $b
     */
    public function __construct(Pin $en, Pin $a, Pin $b)
    {
        $this->en = $en;
        $this->a = $a;
        $this->b = $b;
    }

    public function stop()
    {
        $this->en->low();
    }

    public function forward()
    {
        $this->a->high();
        $this->b->low();

        $this->en->high();
    }

    public function backward()
    {
        $this->a->low();
        $this->b->high();

        $this->en->high();
    }
}

<?php
use Random\Engine;


// dependency injection
// tightly coupled: have to be ignored

/* class Driver{
    protected Vehicle $vehicle;

    public function __construct()
    {
        $this->vehicle = new Vehicle();
    }
}

class Vehicle{
    protected Engine $engine;

    public function __construct()
    {
        $this->engine = new Engine();
    }
} */


// loosely coupled
// constructor level dependency injection
class Driver
{
    protected Vehicle $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }
}

class Vehicle
{
    protected Engine $engine;

    public function __construct()
    {
        $this->engine = new Engine();
    }
}
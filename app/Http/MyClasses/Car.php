<?php

namespace App\Http\MyClasses;

class Car implements \App\interfaces\Vehicle
{

    public function startEngine(): void
    {
        // TODO: Implement startEngine() method.
    }

    public function amountOfWheels(): int
    {
        // TODO: Implement amountOfWheels() method.
        return 4;
    }

    public function type(): string
    {
        // TODO: Implement type() method.
        return 'Car';
    }
}

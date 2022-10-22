<?php

namespace App\Http\MyClasses;

class Bus implements \App\interfaces\Vehicle
{

    public function startEngine(): void
    {
        // TODO: Implement startEngine() method.
    }

    public function amountOfWheels(): int
    {
        // TODO: Implement amountOfWheels() method.
        return 6;
    }

    public function type(): string
    {
        // TODO: Implement type() method.
        return 'Bus';
    }
}

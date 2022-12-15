<?php

namespace lrn\structuralPattern\composite;

class HhdSsd extends Device implements AddDeviceInterface
{

    private $amount;

    public function __construct(string $named, int $amount)
    {
        parent::__construct($named);
        $this->amount = $amount;
    }

    public function connect(): string
    {
        return get_class($this) . ": amount * " . $this->amount . ", " .$this->getNamed();
    }

}

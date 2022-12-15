<?php

namespace lrn\structuralPattern\composite;

class PowerSupply extends Device implements AddDeviceInterface
{
    public function connect(): string
    {
        return get_class($this) . " " .$this->getNamed();
    }

}

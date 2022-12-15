<?php

namespace lrn\structuralPattern\composite;

class MotherBoard extends Device implements AddDeviceInterface
{
    public function connect(): string
    {
        return get_class($this) . " " .$this->getNamed();
    }

}

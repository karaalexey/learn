<?php

namespace lrn\structuralPattern\composite;

class VideoCard extends Device implements AddDeviceInterface
{
    public function connect(): string
    {
        return get_class($this) . " " .$this->getNamed();
    }

}

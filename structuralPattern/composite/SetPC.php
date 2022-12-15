<?php

namespace lrn\structuralPattern\composite;

class SetPC implements AddDeviceInterface
{
    private array $devices = [];

    public function connect(): string
    {
        $readyPC = '';
        foreach ($this->devices as $device){
            $readyPC .= $device->connect();

        }
        return $readyPC;

    }

    public function addDevices(AddDeviceInterface $device)
    {
        $this->devices[] = $device;
    }

}


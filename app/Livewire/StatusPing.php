<?php

namespace App\Livewire;

use JJG\Ping;
use Livewire\Component;

class StatusPing extends Component
{
    public string $ipAddress;

    public function mount($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    public function render()
    {
        $ping = new Ping($this->ipAddress, 128, 3);
        $resultPing = $ping->ping();

        return view('livewire.status-ping', [
            'resultPing' => $resultPing
        ]);
    }
}

<?php

namespace App\Livewire;

use App\Models\TokoLbk;
use JJG\Ping;
use Livewire\Attributes\On;
use Livewire\Component;

class StatusPing extends Component
{
    public string $storeCode = '';

    #[On('submitTableTokoForPing')]
    public function pingIpAddress($query)
    {
        dd($query);


        $ping = new Ping($this->ipAddress, 128, 3);
        $resultPing = $ping->ping();

        if ($resultPing != false) {
            return intval($resultPing);
        }
    }

    public function render()
    {
        return view('livewire.status-ping');
    }
}

<?php

namespace App\Livewire;

use App\Models\TokoLbk;
use JJG\Ping;
use Livewire\Attributes\On;
use Livewire\Component;

class StatusPing extends Component
{
    public string $storeCode = '';

    #[On('submitTableToko')]
    public function pingIpAddress($kode_toko)
    {
        $this->storeCode = $kode_toko;

        try {
            $dataToko = TokoLbk::query()->where('kode_toko', '=', $this->storeCode)->first();

            $pingGateway = new Ping($dataToko->ip_gateway, 64, 1);
            $pingInduk = new Ping($dataToko->ip_induk, 64, 1);
            $pingAnak = new Ping($dataToko->ip_anak, 64, 1);
            $pingStb = new Ping($dataToko->ip_stb, 64, 1);
            $pingWdcp = new Ping($dataToko->ip_wdcp, 64, 1);

            $this->dispatch('afterPingStore', data_ping: [
                'ping_gateway' => $pingGateway->ping(),
                'ping_induk' => $pingInduk->ping(),
                'ping_anak' => $pingAnak->ping(),
                'ping_stb' => $pingStb->ping(),
                'ping_wdcp' => $pingWdcp->ping()
            ]);
        } catch (\Exception $exception) {
        }
    }

    public function render()
    {
        return view('livewire.status-ping');
    }
}

<?php

namespace App\Livewire;

use App\Models\TokoLbk;
use JJG\Ping;
use Livewire\Attributes\On;
use Livewire\Component;

class TableToko extends Component
{
    public string $title = 'Data Store';
    public string $storeCode = '';
    public string $status = 'Loading . .';
    public array $data_ping = [];

    public function sendDataStoreCode(): void
    {
        $query = TokoLbk::query()->where('kode_toko', '=', $this->storeCode)->first();

        if (isset($query['kode_toko']) && strlen($query['kode_toko']) > 0) {
            $this->dispatch('submitTableToko', kode_toko: $this->storeCode);
        }
    }

    #[On('afterPingStore')]
    public function afterPing($data_ping)
    {
        $this->data_ping = $data_ping;

        return $data_ping;
    }

    public function render()
    {
        $data = TokoLbk::query()->join('users', 'tokolbk.edparea', '=', 'users.nik')
            ->where('tokolbk.kode_toko', '=', $this->storeCode)
            ->select('tokolbk.kode_toko', 'tokolbk.nama_toko', 'tokolbk.ip_gateway', 'tokolbk.ip_induk', 'tokolbk.ip_anak', 'tokolbk.ip_stb', 'tokolbk.ip_wdcp', 'users.name as edparea')
            ->first();

        return view('livewire.table-toko', [
            'data' => $data,
            'data_ping' => $this->afterPing($this->data_ping)
        ]);
    }
}

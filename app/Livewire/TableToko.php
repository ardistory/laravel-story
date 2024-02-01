<?php

namespace App\Livewire;

use App\Models\TokoLbk;
use JJG\Ping;
use Livewire\Component;

class TableToko extends Component
{
    public string $title = 'Data Store';
    public string $storeCode = '';
    public string $status = '';

    public function sendDataStoreCode()
    {
        $this->dispatch('submitTableToko', kode_toko: $this->storeCode);
    }

    public function pingGateway($ipAddress)
    {
        $this->status = 'Loading . . ';

        $ping = new Ping($ipAddress, 128, 3);

        return $ping->ping();
    }

    public function pingInduk($ipAddress)
    {
        $ping = new Ping($ipAddress, 128, 3);

        return $ping->ping();
    }

    public function pingAnak($ipAddress)
    {
        $ping = new Ping($ipAddress, 128, 3);

        return $ping->ping();
    }

    public function pingStb($ipAddress)
    {
        $ping = new Ping($ipAddress, 128, 3);

        return $ping->ping();
    }

    public function pingWdcp($ipAddress)
    {
        $ping = new Ping($ipAddress, 128, 3);

        return $ping->ping();
    }

    public function render()
    {
        $data = TokoLbk::query()->join('users', 'tokolbk.edparea', '=', 'users.nik')
            ->where('tokolbk.kode_toko', '=', $this->storeCode)
            ->select('tokolbk.kode_toko', 'tokolbk.nama_toko', 'tokolbk.ip_gateway', 'tokolbk.ip_induk', 'tokolbk.ip_anak', 'tokolbk.ip_stb', 'tokolbk.ip_wdcp', 'users.name as edparea')
            ->first();

        return view('livewire.table-toko', [
            'data' => $data,
            'data_ping' => [
                'ip_gateway' => intval($this->pingGateway($data->ip_gateway ?? '')),
                'ip_induk' => intval($this->pingInduk($data->ip_induk ?? '')),
                'ip_anak' => intval($this->pingAnak($data->ip_anak ?? '')),
                'ip_stb' => intval($this->pingStb($data->ip_stb ?? '')),
                'ip_wdcp' => intval($this->pingWdcp($data->ip_wdcp ?? '')),
            ]
        ]);
    }
}

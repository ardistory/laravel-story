<?php

namespace App\Livewire;

use App\Api\RouterosAPI;
use App\Models\TokoLbk;
use Livewire\Attributes\On;
use Livewire\Component;

class ListMac extends Component
{
    public array $listMac = [];
    public string $ipWdcpProperty = '';
    public string $storeCodeFromEvent = '';
    public string $countMac = '';

    #[On('submitTableToko')]
    public function getListMacAddressFromRouter($kode_toko): void
    {
        $this->storeCodeFromEvent = $kode_toko;

        $query = TokoLbk::query()->where('kode_toko', '=', $this->storeCodeFromEvent)->first();

        try {
            $this->ipWdcpProperty = $query->ip_wdcp;

            $api = new RouterosAPI();

            if ($api->connect($this->ipWdcpProperty, env('ROS_WDCP_USERNAME'), env('ROS_WDCP_PASSWORD'))) {
                $data = $api->comm('/interface/wireless/access-list/print');

                $this->countMac = count($data);
                $this->listMac = $data;

                session()->flash('counted', $this->countMac);
            } else {
                session()->flash('listMacFailed');
            }
        } catch (\Exception $exception) {
            session()->flash('listMacFailed');
        }

    }

    public function render()
    {
        return view('livewire.list-mac');
    }
}

<?php

namespace App\Livewire;

use App\Api\RouterosAPI;
use App\Models\TokoLbk;
use Livewire\Attributes\On;
use Livewire\Component;

class ListMac extends Component
{
    public string $ipWdcpProperty = '';
    public string $storeCodeFromEvent = '';
    public string $countMac = '';

    #[On('submitTableToko')]
    public function getListMacAddressFromRouter($kode_toko)
    {
        $this->storeCodeFromEvent = $kode_toko;

        $query = TokoLbk::query()->where('kode_toko', '=', $this->storeCodeFromEvent)->first();

        try {
            $this->ipWdcpProperty = $query->ip_wdcp;
        } catch (\Exception $exception) {
            $this->ipWdcpProperty = 'error';
        }

        if ($this->ipWdcpProperty == 'error') {
        } else {
            $api = new RouterosAPI();

            if ($api->connect($this->ipWdcpProperty, env('ROS_WDCP_USERNAME'), env('ROS_WDCP_PASSWORD'))) {
                $data = $api->comm('/interface/wireless/access-list/print');

                $this->countMac = count($data);

                session()->flash('counted', $this->countMac);

                return $data;
            } else {
                $this->inputComment = '';
                $this->macAddress = '';
            }

            $api->disconnect();
        }
    }

    public function deleteMac($id)
    {
        $api = new RouterosAPI();
        if ($api->connect($this->ipWdcpProperty, env('ROS_WDCP_USERNAME'), env('ROS_WDCP_PASSWORD'))) {
            $api->comm('/interface/wireless/access-list/remove', [
                'numbers' => $id
            ]);
        }
        $api->disconnect();
    }

    #[On('afterAddMac')]
    public function render($afterAddMac = '')
    {
        return view('livewire.list-mac', [
            'listMac' => [
                $this->getListMacAddressFromRouter($this->storeCodeFromEvent) ?? [
                    [
                        '.id' => '',
                        'mac-address' => '',
                        'comment' => ''
                    ]

                ]
            ]
        ]);
    }
}

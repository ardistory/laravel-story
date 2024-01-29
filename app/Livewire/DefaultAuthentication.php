<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\TokoLbk;
use App\Api\RouterosAPI;

class DefaultAuthentication extends Component
{
    public string $storeCodeFromEvent = '';
    public string $ipWdcpProperty = '';

    #[On('submitTableToko')]
    public function getStatusWlan($kode_toko)
    {
        if (Auth::user()->role->level == 3) {
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
                    $data = $api->comm('/interface/wireless/print');

                    return $data;
                }

                $api->disconnect();
            }
        }
    }

    public function setDefaultAuthenticationTrue($idWlan)
    {
        if ($this->ipWdcpProperty == 'error') {
        } else {
            $api = new RouterosAPI();

            if ($api->connect($this->ipWdcpProperty, env('ROS_WDCP_USERNAME'), env('ROS_WDCP_PASSWORD'))) {
                $api->comm('/interface/wireless/set', [
                    'default-authentication' => 'yes',
                    'numbers' => $idWlan
                ]);

            }

            $api->disconnect();
        }
    }

    public function setDefaultAuthenticationFalse($idWlan)
    {
        if ($this->ipWdcpProperty == 'error') {
        } else {
            $api = new RouterosAPI();

            if ($api->connect($this->ipWdcpProperty, env('ROS_WDCP_USERNAME'), env('ROS_WDCP_PASSWORD'))) {
                $api->comm('/interface/wireless/set', [
                    'default-authentication' => 'no',
                    'numbers' => $idWlan
                ]);

            }

            $api->disconnect();
        }
    }

    public function render()
    {
        return view('livewire.default-authentication', [
            'dataWlan' => $this->getStatusWlan($this->storeCodeFromEvent) ?? [
                [
                    '.id' => '',
                    'name' => '',
                    'default-authentication' => ''
                ]
            ]
        ]);
    }
}

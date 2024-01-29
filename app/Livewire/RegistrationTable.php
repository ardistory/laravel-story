<?php

namespace App\Livewire;

use App\Api\RouterosAPI;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\TokoLbk;

class RegistrationTable extends Component
{
    public string $storeCodeFromEvent = '';
    public string $ipWdcpProperty = '';
    public string $lastIp = '';

    #[On('submitTableToko')]
    public function getRegistrationTable($kode_toko)
    {
        if (Auth::user()->role->level == 3) {
            $this->storeCodeFromEvent = $kode_toko ?? '';

            $query = TokoLbk::query()->where('kode_toko', '=', $this->storeCodeFromEvent)->first();

            try {
                $this->ipWdcpProperty = $query->ip_wdcp;

                $api = new RouterosAPI();

                if ($this->ipWdcpProperty == '') {

                } else {
                    if ($api->connect($this->ipWdcpProperty, env('ROS_WDCP_USERNAME'), env('ROS_WDCP_PASSWORD'))) {
                        $data = $api->comm('/interface/wireless/registration-table/print');

                        return $data;
                    } else {
                        session()->flash('listRegFailed');
                    }
                }

                $api->disconnect();
            } catch (\Exception $exception) {
                session()->flash('listRegFailed');
            }
        }
    }

    public function refresh()
    {
        $this->render();
    }

    public function render()
    {
        return view('livewire.registration-table', [
            'listRegistrationTable' => $this->getRegistrationTable($this->storeCodeFromEvent) ?? [
                [
                    '.id' => '',
                    'mac-address' => '',
                    'last-ip' => ''
                ]
            ]
        ]);
    }
}

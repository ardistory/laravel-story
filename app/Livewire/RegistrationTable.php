<?php

namespace App\Livewire;

use App\Api\RouterosAPI;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\TokoLbk;

class RegistrationTable extends Component
{
    public string $storeCodeFromEvent = 'TEST';
    public string $ipWdcpProperty = '';
    public string $countMac = '';
    public string $lastIp = '';

    #[On('submitTableToko')]
    public function getRegistrationTable($kode_toko)
    {
        $this->storeCodeFromEvent = $kode_toko ?? '';

        $query = TokoLbk::query()->where('kode_toko', '=', $this->storeCodeFromEvent)->first();

        try {
            $this->ipWdcpProperty = $query->ip_wdcp ?? '';

            $api = new RouterosAPI();

            if ($this->ipWdcpProperty == '') {

            } else {
                if ($api->connect($this->ipWdcpProperty, env('ROS_WDCP_USERNAME'), env('ROS_WDCP_PASSWORD'))) {
                    $data = $api->comm('/interface/wireless/registration-table/print');

                    $this->countMac = count($data);

                    session()->flash('counted', $this->countMac);

                    return $data;
                } else {
                    session()->flash('listMacFailed');
                }
            }

        } catch (\Exception $exception) {
            dd($exception->getMessage());
            session()->flash('listMacFailed');
        }
    }

    public function render()
    {
        return view('livewire.registration-table', [
            'listRegistrationTable' => $this->getRegistrationTable($this->storeCodeFromEvent)
        ]);
    }
}

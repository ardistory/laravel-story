<?php

namespace App\Livewire;

use App\Api\RouterosAPI;
use App\Models\TokoLbk;
use Livewire\Component;
use Livewire\Attributes\On;

class AddMac extends Component
{
    public string $storeCodeFromEvent = '';
    public string $inputComment = '';
    public string $macAddress = '';
    public string $ipWdcpProperty = '';

    #[On('submitTableToko')]
    public function getStoreCodeFromEvent($kode_toko)
    {
        $this->storeCodeFromEvent = $kode_toko;

        $query = TokoLbk::query()->where('kode_toko', '=', $this->storeCodeFromEvent)->first();

        try {
            $this->ipWdcpProperty = $query->ip_wdcp;
        } catch (\Exception $exception) {
            $this->ipWdcpProperty = 'error';

            session()->flash('error');
        }

        if ($this->ipWdcpProperty == 'error') {
        } else {
            $api = new RouterosAPI();

            if ($api->connect($this->ipWdcpProperty, env('ROS_WDCP_USERNAME'), env('ROS_WDCP_PASSWORD'))) {
                session()->flash('connected');
            } else {
                $this->inputComment = '';
                $this->macAddress = '';

                session()->flash('error');
            }

            $api->disconnect();
        }
    }

    public function insertMacAddress(): void
    {
        $api = new RouterosAPI();

        if ($this->ipWdcpProperty === 'error') {
            session()->flash('failedInsertMac');
        } else {
            if ($api->connect($this->ipWdcpProperty, env('ROS_WDCP_USERNAME'), env('ROS_WDCP_PASSWORD'))) {
                $cekMacAddress = $api->comm('/interface/wireless/access-list/print', [
                    '?mac-address' => strtoupper($this->macAddress)
                ]);

                if (count($cekMacAddress) > 0) {
                    session()->flash('thereIs');
                } else {
                    $api->comm('/interface/wireless/access-list/add', [
                        'mac-address' => $this->macAddress,
                        'comment' => $this->inputComment
                    ]);

                    $doneKah = $api->comm('/interface/wireless/access-list/print', [
                        '?mac-address' => $this->macAddress
                    ]);

                    if (count($doneKah) > 0) {
                        session()->flash('successInsertMac', $this->macAddress);
                    }
                }
            } else {
                session()->flash('failedInsertMac');
            }
        }

        $this->dispatch('afterAddMac', afterAddMac: 'afterAddMac');

        $api->disconnect();
    }

    public function render()
    {
        return view('livewire.add-mac');
    }
}

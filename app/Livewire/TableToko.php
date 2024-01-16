<?php

namespace App\Livewire;

use App\Models\TokoLbk;
use Livewire\Component;

class TableToko extends Component
{
    public string $title = 'Data Store';

    public string $storeCode = '';

    public function render()
    {
        $data = TokoLbk::query()->where('kode_toko', '=', $this->storeCode)->first();

        return view('livewire.table-toko', [
            'data' => $data
        ]);
    }
}

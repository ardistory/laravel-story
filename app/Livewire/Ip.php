<?php

namespace App\Livewire;


use App\Models\TokoLbk;
use Livewire\Component;
use Livewire\WithPagination;

class Ip extends Component
{
    use WithPagination;

    public string $query = '';

    public function getDataFromModel()
    {
        return TokoLbk::query()
            ->join('area', 'tokolbk.kode_toko', '=', 'area.kode_toko')
            ->join('users', 'users.nik', '=', 'area.nik')
            ->select('tokolbk.kode_toko as kode_toko', 'tokolbk.nama_toko as nama_toko', 'tokolbk.ip_gateway', 'tokolbk.ip_induk', 'tokolbk.ip_anak', 'tokolbk.ip_stb', 'tokolbk.ip_wdcp', 'users.name as name', 'users.nik as nik', 'users.picture as picture')
            ->where('tokolbk.kode_toko', 'like', '%' . $this->query . '%')
            ->orWhere('tokolbk.nama_toko', 'like', '%' . $this->query . '%')
            ->inRandomOrder()
            ->paginate(8);
    }

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.ip', [
            'data' => $this->getDataFromModel()
        ]);
    }
}

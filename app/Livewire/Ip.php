<?php

namespace App\Livewire;


use App\Models\Area;
use App\Models\TokoLbk;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class Ip extends Component
{
    use WithPagination;

    public string $query = '';

    #[Validate('required')]
    public string $kode_toko;
    #[Validate('required')]
    public string $nama_toko;
    #[Validate('required')]
    public string $ip_gateway;
    #[Validate('required')]
    public string $ip_induk;
    #[Validate('required')]
    public string $ip_anak;
    #[Validate('required')]
    public string $ip_stb;
    #[Validate('required')]
    public string $ip_wdcp;
    #[Validate('required')]
    public string $edparea;

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

    public function updatedKodeToko()
    {
        $this->kode_toko = strtoupper($this->kode_toko);
    }

    public function getDataArea()
    {
        return User::query()->get();
    }

    public function insertNewStore()
    {
        $validated = $this->validate();

        $thereIs = TokoLbk::query()->where('kode_toko', '=', $validated['kode_toko'])->get();

        if (count($thereIs) > 0) {
            session()->flash('failedInsertNew', "Insert {$validated['kode_toko']} failed!");
        } else {
            TokoLbk::query()->create($validated);

            Area::query()->create([
                'kode_toko' => $validated['kode_toko'],
                'nik' => $validated['edparea']
            ]);
        }

        $this->reset();
    }

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.ip', [
            'data' => $this->getDataFromModel(),
            'dataArea' => $this->getDataArea()
        ]);
    }
}

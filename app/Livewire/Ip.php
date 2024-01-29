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
    public string $newStoreCode;
    #[Validate('required')]
    public string $newNameStoreCode;
    #[Validate('required')]
    public string $newIpGateway;
    #[Validate('required')]
    public string $newIpInduk;
    #[Validate('required')]
    public string $newIpAnak;
    #[Validate('required')]
    public string $newIpStb;
    #[Validate('required')]
    public string $newIpWdcp;
    #[Validate('required')]
    public string $newArea = '';

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

    public function getDataArea()
    {
        return User::query()->get();
    }

    public function insertNewStore()
    {
        $validated = $this->validate();

        $edp = explode("|", $validated['newArea']);

        $name = $edp[0];
        $nik = $edp[1];

        $newStoreCode = strtoupper($validated['newStoreCode']);
        $newNameStoreCode = $validated['newNameStoreCode'];
        $newIpGateway = $validated['newIpGateway'];
        $newIpInduk = $validated['newIpInduk'];
        $newIpAnak = $validated['newIpAnak'];
        $newIpStb = $validated['newIpStb'];
        $newIpWdcp = $validated['newIpWdcp'];

        $thereIs = TokoLbk::query()->where('kode_toko', '=', $newStoreCode)->get();

        if (count($thereIs) > 0) {
            session()->flash('failedInsertNew', "Insert {$newStoreCode} failed!");
        } else {
            $tokolbk = new TokoLbk;
            $tokolbk->kode_toko = $newStoreCode;
            $tokolbk->nama_toko = $newNameStoreCode;
            $tokolbk->ip_gateway = $newIpGateway;
            $tokolbk->ip_induk = $newIpInduk;
            $tokolbk->ip_anak = $newIpAnak;
            $tokolbk->ip_stb = $newIpStb;
            $tokolbk->ip_wdcp = $newIpWdcp;
            $tokolbk->edparea = $name;

            $area = new Area;
            $area->kode_toko = $newStoreCode;
            $area->nik = $nik;

            if ($tokolbk->save() && $area->save()) {
                session()->flash('successInsertNew', "Insert {$newStoreCode} success!");
            }
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

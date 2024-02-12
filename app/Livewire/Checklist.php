<?php

namespace App\Livewire;

use App\Models\TokoLbk;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Checklist extends Component
{
    use WithPagination;

    public string $query = '';

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function getMyArea()
    {
        return TokoLbk::query()
            ->join('users', 'users.nik', '=', 'tokolbk.edparea')
            ->join('checked', 'checked.kode_toko', '=', 'tokolbk.kode_toko')
            ->select('tokolbk.kode_toko as kode_toko', 'tokolbk.nama_toko as nama_toko', 'users.name as name', 'users.nik as nik', 'users.picture as picture', 'users.role_level', 'checked.is_checked')
            ->where('tokolbk.edparea', '=', Auth::user()->nik)
            ->where('tokolbk.nama_toko', 'like', '%' . $this->query . '%')
            ->inRandomOrder()
            ->paginate(5);
    }

    public function render()
    {
        return view('livewire.checklist', [
            'areas' => $this->getMyArea(),
            'test_tanggal' => Carbon::now()
        ]);
    }
}

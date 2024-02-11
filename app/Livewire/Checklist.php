<?php

namespace App\Livewire;

use App\Models\TokoLbk;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Checklist extends Component
{
    use WithPagination;

    public function getMyArea()
    {
        return TokoLbk::query()
            ->join('area', 'tokolbk.edparea', '=', 'area.nik')
            ->join('users', 'tokolbk.edparea', '=', 'users.nik')
            ->where('area.nik', '=', Auth::user()->nik)
            ->select('tokolbk.kode_toko', 'tokolbk.nama_toko', 'area.nik', 'users.name', 'users.role_level')
            ->inRandomOrder()
            ->paginate(8);
        ;
    }

    public function render()
    {
        return view('livewire.checklist', [
            'areas' => $this->getMyArea()
        ]);
    }
}

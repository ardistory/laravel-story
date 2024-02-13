<?php

namespace App\Livewire;

use App\Models\Checked;
use App\Models\TokoLbk;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class Checklist extends Component
{
    use WithPagination;

    public string $query = '';
    #[Locked]
    public string $storeCode;
    #[Validate('image|require|max:3000')]
    public $foto_1;
    #[Validate('image|require|max:3000')]
    public $foto_2;
    #[Validate('image|require|max:3000')]
    public $foto_3;
    #[Validate('image|require|max:3000')]
    public $foto_4;
    #[Validate('image|require|max:3000')]
    public $foto_5;
    #[Validate('image|require|max:3000')]
    public $foto_6;
    #[Validate('image|require|max:3000')]
    public $foto_7;
    #[Validate('image|require|max:3000')]
    public $foto_8;
    #[Validate('image|require|max:3000')]
    public $foto_9;
    #[Validate('image|require|max:3000')]
    public $foto_10;
    public $checklist_1;
    public $checklist_2;
    public $checklist_3;
    public $checklist_4;
    public $checklist_5;
    public $checklist_6;
    public $checklist_7;
    public $checklist_8;
    public $checklist_9;
    public $checklist_10;

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function getMyArea()
    {
        return TokoLbk::query()
            ->join('users', 'users.nik', '=', 'tokolbk.edparea')
            ->join('gambar', 'gambar.kode_toko', '=', 'tokolbk.kode_toko')
            ->join('checklist', 'checklist.kode_toko', '=', 'tokolbk.kode_toko')
            ->join('checked', 'checked.kode_toko', '=', 'tokolbk.kode_toko')
            ->select('tokolbk.kode_toko as kode_toko', 'tokolbk.nama_toko as nama_toko', 'users.name as name', 'users.nik as nik', 'users.picture as picture', 'users.role_level', 'checked.is_checked', 'gambar.foto_1', 'gambar.foto_2', 'gambar.foto_3', 'gambar.foto_4', 'gambar.foto_5', 'gambar.foto_6', 'gambar.foto_7', 'gambar.foto_8', 'gambar.foto_9', 'gambar.foto_10', 'gambar.post_at', 'checklist.checklist_1', 'checklist.checklist_2', 'checklist.checklist_3', 'checklist.checklist_4', 'checklist.checklist_5', 'checklist.checklist_6', 'checklist.checklist_7', 'checklist.checklist_8', 'checklist.checklist_9', 'checklist.checklist_10')
            ->where('tokolbk.edparea', '=', Auth::user()->nik)
            ->where('tokolbk.nama_toko', 'like', '%' . $this->query . '%')
            ->inRandomOrder()
            ->paginate(5);
    }

    public function getCountChecked()
    {
        $countChecked = Checked::query()->where('is_checked', '!=', 0)->get();

        return count($countChecked);
    }

    public function getCountUnchecked()
    {
        $countUnchecked = Checked::query()
            ->join('gambar', 'gambar.kode_toko', '=', 'checked.kode_toko')
            ->select('gambar.post_at', 'checked.is_checked')
            ->where('gambar.post_at', '!=', NULL)
            ->where('checked.is_checked', '=', 0)
            ->get();

        return count($countUnchecked);
    }

    public function storeGambar($kode_toko)
    {
        $this->storeCode = $kode_toko;
        dd($this->storeCode);
    }

    public function render()
    {
        return view('livewire.checklist', [
            'areas' => $this->getMyArea(),
            'count_checked' => $this->getCountChecked(),
            'count_unchecked' => $this->getCountUnchecked()
        ]);
    }
}

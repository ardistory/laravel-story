<?php

namespace App\Livewire;

use App\Models\Checked;
use App\Models\Checklist as ChecklistModel;
use App\Models\Gambar;
use App\Models\TokoLbk;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Checklist extends Component
{
    use WithPagination;
    use WithFileUploads;

    public string $query = '';
    #[Locked]
    public string $storeCode;
    #[Validate('image|required|max:3000')]
    public $foto_1;
    #[Validate('image|required|max:3000')]
    public $foto_2;
    #[Validate('image|required|max:3000')]
    public $foto_3;
    #[Validate('image|required|max:3000')]
    public $foto_4;
    #[Validate('image|required|max:3000')]
    public $foto_5;
    #[Validate('image|required|max:3000')]
    public $foto_6;
    #[Validate('image|required|max:3000')]
    public $foto_7;
    #[Validate('image|required|max:3000')]
    public $foto_8;
    #[Validate('image|required|max:3000')]
    public $foto_9;
    #[Validate('image|required|max:3000')]
    public $foto_10;

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function getMyArea()
    {
        return TokoLbk::query()
            ->join('users', 'users.nik', '=', 'tokolbk.edparea')
            ->join('gambar', 'gambar.kode_toko', '=', 'tokolbk.kode_toko')
            ->join('checked', 'checked.kode_toko', '=', 'tokolbk.kode_toko')
            ->select('tokolbk.kode_toko as kode_toko', 'tokolbk.nama_toko as nama_toko', 'users.name as name', 'users.nik as nik', 'users.picture as picture', 'users.role_level', 'checked.is_checked', 'gambar.foto_1', 'gambar.foto_2', 'gambar.foto_3', 'gambar.foto_4', 'gambar.foto_5', 'gambar.foto_6', 'gambar.foto_7', 'gambar.foto_8', 'gambar.foto_9', 'gambar.foto_10', 'gambar.post_at')
            ->where('tokolbk.edparea', '=', Auth::user()->nik)
            ->where('tokolbk.nama_toko', 'like', '%' . $this->query . '%')
            ->paginate(5);
    }

    public function getListChecked()
    {
        return TokoLbk::query()
            ->join('area', 'area.kode_toko', '=', 'tokolbk.kode_toko')
            ->join('users', 'users.nik', '=', 'area.nik')
            ->join('gambar', 'gambar.kode_toko', '=', 'tokolbk.kode_toko')
            ->join('checked', 'checked.kode_toko', '=', 'tokolbk.kode_toko')
            ->join('users as users_check_by', 'users_check_by.nik', '=', 'checked.check_by')
            ->select('tokolbk.kode_toko', 'tokolbk.nama_toko', 'users.picture', 'users.nik', 'users.name', 'checked.is_checked', 'checked.check_by', 'users_check_by.name as check_by_name', 'gambar.post_at')
            ->where('checked.is_checked', '=', 1)
            ->get();
    }

    public function getListUnchecked()
    {
        return TokoLbk::query()
            ->join('area', 'area.kode_toko', '=', 'tokolbk.kode_toko')
            ->join('users', 'users.nik', '=', 'area.nik')
            ->join('gambar', 'gambar.kode_toko', '=', 'tokolbk.kode_toko')
            ->join('checked', 'checked.kode_toko', '=', 'tokolbk.kode_toko')
            ->select('tokolbk.kode_toko', 'tokolbk.nama_toko', 'users.picture', 'users.nik', 'users.name', 'checked.is_checked', 'checked.check_by', 'gambar.post_at')
            ->where('checked.is_checked', '=', 0)
            ->where('gambar.post_at', '!=', NULL)
            ->orderBy('gambar.post_at', 'desc')
            ->get();
    }

    public function getListRejected()
    {
        return TokoLbk::query()
            ->join('area', 'area.kode_toko', '=', 'tokolbk.kode_toko')
            ->join('users', 'users.nik', '=', 'area.nik')
            ->join('gambar', 'gambar.kode_toko', '=', 'tokolbk.kode_toko')
            ->join('checked', 'checked.kode_toko', '=', 'tokolbk.kode_toko')
            ->join('users as users_check_by', 'users_check_by.nik', '=', 'checked.check_by')
            ->select('tokolbk.kode_toko', 'tokolbk.nama_toko', 'users.picture', 'users.nik', 'users.name', 'checked.is_checked', 'checked.check_by', 'users_check_by.name as check_by_name', 'gambar.post_at')
            ->where('checked.is_checked', '=', 2)
            ->get();
    }

    public function storeGambar($kode_toko): void
    {
        $this->storeCode = $kode_toko;

        $this->validate();

        $nameFoto1 = $this->storeCode . "_foto_1.png";
        $nameFoto2 = $this->storeCode . "_foto_2.png";
        $nameFoto3 = $this->storeCode . "_foto_3.png";
        $nameFoto4 = $this->storeCode . "_foto_4.png";
        $nameFoto5 = $this->storeCode . "_foto_5.png";
        $nameFoto6 = $this->storeCode . "_foto_6.png";
        $nameFoto7 = $this->storeCode . "_foto_7.png";
        $nameFoto8 = $this->storeCode . "_foto_8.png";
        $nameFoto9 = $this->storeCode . "_foto_9.png";
        $nameFoto10 = $this->storeCode . "_foto_10.png";

        $this->foto_1->storePubliclyAs('img/checklist', $nameFoto1, 'public');
        $this->foto_2->storePubliclyAs('img/checklist', $nameFoto2, 'public');
        $this->foto_3->storePubliclyAs('img/checklist', $nameFoto3, 'public');
        $this->foto_4->storePubliclyAs('img/checklist', $nameFoto4, 'public');
        $this->foto_5->storePubliclyAs('img/checklist', $nameFoto5, 'public');
        $this->foto_6->storePubliclyAs('img/checklist', $nameFoto6, 'public');
        $this->foto_7->storePubliclyAs('img/checklist', $nameFoto7, 'public');
        $this->foto_8->storePubliclyAs('img/checklist', $nameFoto8, 'public');
        $this->foto_9->storePubliclyAs('img/checklist', $nameFoto9, 'public');
        $this->foto_10->storePubliclyAs('img/checklist', $nameFoto10, 'public');

        Gambar::query()->where('kode_toko', '=', $this->storeCode)->update([
            'foto_1' => $nameFoto1,
            'foto_2' => $nameFoto2,
            'foto_3' => $nameFoto3,
            'foto_4' => $nameFoto4,
            'foto_5' => $nameFoto5,
            'foto_6' => $nameFoto6,
            'foto_7' => $nameFoto7,
            'foto_8' => $nameFoto8,
            'foto_9' => $nameFoto9,
            'foto_10' => $nameFoto10,
            'post_at' => Carbon::now()
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.checklist', [
            'areas' => $this->getMyArea(),
            'carbon' => new Carbon,
            'list_checked' => $this->getListChecked(),
            'list_unchecked' => $this->getListUnchecked(),
            'list_rejected' => $this->getListRejected(),
        ]);
    }
}

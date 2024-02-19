<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class IfDefaultPassword extends Component
{
    use WithFileUploads;

    #[Validate('required|image|max:2000')]
    public $picture;

    #[Validate('email|required')]
    public string $email;
    #[Validate('required')]
    public string $newpassword;

    public function updateProfile()
    {
        $this->validate([
            'email' => ['required', 'email'],
            'newpassword' => ['required', Password::min(8)->numbers()->symbols()],
            'picture' => ['required', 'image', 'max:2000']
        ]);

        $namePicture = Auth::user()->nik . "_" . Auth::user()->name . ".png";
        $this->picture->storePubliclyAs('img/profile', $namePicture, 'public');

        $affected = User::query()->where('nik', '=', Auth::user()->nik)->update([
            'email' => $this->email,
            'password' => Hash::make($this->newpassword),
            'picture' => $namePicture
        ]);

        if ($affected > 0) {
            response()->redirectTo('/');
        }
        session()->flash('errorFirstSetup');
    }

    public function render()
    {
        return view('livewire.if-default-password');
    }
}

<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|min:10|max:10')]
    public string $nik;

    #[Validate('required|min:8')]
    public string $password;
    public bool $remember = false;

    public function login()
    {
        $validated = $this->validate();

        if (Auth::attempt($validated, $this->remember)) {
            $this->redirectRoute('dashboard');
        } else {
            $this->reset('password');

            session()->flash('error');
        }
    }

    public function render()
    {
        $isNikNull = User::query()->where('nik', '=', $this->nik ?? '')->first('nik');

        return view('livewire.login', [
            'isNikNull' => $isNikNull == null
        ]);
    }
}

<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|max:10')]
    public string $nik;

    #[Validate('required|min:8')]
    public string $password;

    public function login()
    {
        $validated = $this->validate();

        if (Auth::attempt($validated)) {
            $this->redirectRoute('dashboard');
        } else {
            session()->flash('error');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}

<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ListUsers extends Component
{
    public function getDataUsers()
    {
        return User::query()
            ->inRandomOrder()
            ->get();
    }

    public function render()
    {
        return view('livewire.list-users', [
            'users' => $this->getDataUsers()
        ]);
    }
}

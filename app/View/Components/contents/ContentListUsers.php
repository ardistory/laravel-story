<?php

namespace App\View\Components\contents;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContentListUsers extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public function getDataUsers()
    {
        return User::query()
            ->inRandomOrder()
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('contents.content-list-users', [
            'users' => $this->getDataUsers()
        ]);
    }
}

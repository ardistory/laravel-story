<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Documentation;

class ListDocumentation extends Component
{

    public function getDocumentations()
    {
        return Documentation::query()
            ->join('users', 'documentation.post_by', '=', 'users.nik')
            ->select('documentation.id', 'documentation.title', 'documentation.description', 'documentation.picture as doc_picture', 'documentation.updated_at', 'users.name', 'users.picture', 'users.role_level')
            ->orderBy('updated_at', 'desc')
            ->get();
    }

    public function render()
    {
        return view('livewire.list-documentation', [
            'data' => $this->getDocumentations()
        ]);
    }
}

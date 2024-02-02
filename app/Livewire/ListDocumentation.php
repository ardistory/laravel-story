<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Documentation;
use Livewire\WithFileUploads;

class ListDocumentation extends Component
{
    use WithFileUploads;

    #[Validate('required|min:4')]
    public string $title;

    public string $description = '';
    #[Validate('required|image|max:2000')]
    public $picture;

    public function getDocumentations()
    {
        return Documentation::query()
            ->join('users', 'documentation.post_by', '=', 'users.nik')
            ->select('documentation.id', 'documentation.title', 'documentation.description', 'documentation.picture as doc_picture', 'documentation.updated_at', 'users.name', 'users.picture', 'users.role_level')
            ->orderBy('updated_at', 'desc')
            ->get();
    }

    public function postDocumentation()
    {
        $this->validate();

        $fileName = Auth::user()->name . rand(1, 100) . "_doc.jpg";
        $this->picture->storePubliclyAs('img/documentation', $fileName, 'public');

        Documentation::query()->create([
            'title' => $this->title,
            'description' => $this->description,
            'picture' => $fileName,
            'post_by' => Auth::user()->nik
        ]);
    }

    public function render()
    {
        return view('livewire.list-documentation', [
            'data' => $this->getDocumentations()
        ]);
    }
}

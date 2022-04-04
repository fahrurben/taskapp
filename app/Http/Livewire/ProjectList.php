<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectList extends Component
{
    protected $listeners = ['triggerRefresh' => '$refresh'];

    public function render()
    {
        $projects = Project::paginate();
        return view('livewire.project-list', compact('projects'));
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectForm extends Component
{
    public $project_id;
    public $name;
    public $code;

    protected $rules = [
        'name' => 'required',
        'code' => 'required',
    ];

    protected $listeners = ['triggerEdit'];

    public function render()
    {
        return view('livewire.project-form');
    }

    public function submit()
    {
        $validatedData = $this->validate();

        if (!empty($this->project_id)) {
            $project = Project::findOrFail($this->project_id);
            $project->fill($validatedData);
            $project->save();
        } else {
            Project::create($validatedData);
        }

        $this->emit('hideCreateProject');
        $this->emitTo('project-list', 'triggerRefresh');
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->name = null;
        $this->code = null;
    }

    public function triggerEdit($project_id)
    {
        $project = Project::findOrfail($project_id);
        $this->project_id = $project_id;
        $this->name = $project->name;
        $this->code = $project->code;
        $this->emit('triggerUpdateProject');
    }
}

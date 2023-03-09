<?php

namespace App\Http\Livewire;

use App\Models\Projects as Project;
use Livewire\Component;

class Projects extends Component
{
    public $total = 2;
    public function render()
    {
        return view('livewire.projects', [
            'projects' => Project::paginate($this->total),
            'count' => Project::count(),
            'total' => $this->total
        ]);
    }

    public function loadData()
    {
        $this->total += $this->total;
    }
    public function hideData()
    {
        $this->total = 2;
        $this->dispatchBrowserEvent('scroll-to-top');
    }
}

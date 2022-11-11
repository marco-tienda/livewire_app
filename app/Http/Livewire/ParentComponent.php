<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class ParentComponent extends Component
{
    public $name = "Hola desde el componente padre";
    public $employees;

    public function mount()
    {
        $this->employees = Employee::all();
    }

    public function render()
    {
        return view('livewire.parent-component');
    }
}

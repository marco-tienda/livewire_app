<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class ChildComponent extends Component
{
    public $name;
    public $employee;

    public function mount(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function render()
    {
        return view('livewire.child-component');
    }
}

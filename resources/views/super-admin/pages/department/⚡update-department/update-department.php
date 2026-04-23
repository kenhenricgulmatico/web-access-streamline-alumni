<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use App\Models\Department;

new #[Layout('layouts::app-super-admin')] class extends Component
{
    public Department $department;
    public string $department_name = '';

    public function mount(Department $department)
    {
        $this->department = $department;
        $this->department_name = $department->department_name;
    }

    protected function rules()
    {
        return [
            'department_name' => 'required|string|min:3|max:255|unique:departments,department_name,' . $this->department->id,
        ];
    }

    public function messages()
    {
        return [
            'department_name.required' => 'The department name is required.',
            'department_name.string'   => 'The department name must be a string.',
            'department_name.min'      => 'The department name must be at least 3 characters.',
            'department_name.max'      => 'The department name may not be greater than 255 characters.',
            'department_name.unique'   => 'The department name is already taken.',
        ];
    }

    public function update()
    {
        $validated = $this->validate();

        $this->department->update([
            'department_name' => trim(strip_tags($validated['department_name'])),
        ]);

        session()->flash('success', 'Department updated successfully.');
        return redirect()->route('super-admin.department.view');
    }

    #[Computed]
    public function departments()
    {
        return Department::select('id', 'department_name')->get();
    }
};

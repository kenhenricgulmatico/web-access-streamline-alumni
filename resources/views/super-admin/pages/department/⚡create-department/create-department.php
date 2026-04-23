<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use App\Models\Department;


new #[Layout('layouts::app-super-admin')] class extends Component
{
    public string $department_name = '';

    protected function rules()
    {
        return [
            'department_name' => 'required|string|min:3|max:255|unique:departments,department_name',
        ];
    }

    public function messages()
    {
        return [
            'department_name.required' => 'The department department name is required.',
            'department_name.string'   => 'The department department name must be a string.',
            'department_name.min'      => 'The department department name must be at least 3 characters.',
            'department_name.max'      => 'The department department name may not be greater than 255 characters.',
            'department_name.unique'   => 'The department department name is already taken.',
        ];
    }

    public function create()
    {
        $validated = $this->validate();

        Department::create([
            'department_name' => trim(strip_tags($validated['department_name'])),
        ]);

        session()->flash('success', 'Department created successfully.');
        return redirect()->route('super-admin.department.view');
    }

    #[Computed]
    public function departments()
    {
        return Department::select('id', 'department_name')->get();
    }

};

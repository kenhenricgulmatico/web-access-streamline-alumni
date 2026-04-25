<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use App\Models\ProgramHead;
use App\Models\User;
use App\Models\Department;

new #[Layout('layouts::app-super-admin')] class extends Component
{
    public int $user_id;
    public int $department_id;

    protected function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'department_id' => 'required|exists:departments,id',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'You must select a user.',
            'user_id.exists'   => 'Selected user does not exist.',
            'department_id.required' => 'You must select a department.',
            'department_id.exists'   => 'Selected department does not exist.',
        ];
    }

    public function create()
    {
        $validated = $this->validate();

        ProgramHead::create([
            'user_id' => $validated['user_id'],
            'department_id' => $validated['department_id'],
        ]);

        session()->flash('success', 'Program Head assigned successfully.');
        return redirect()->route('super-admin.assign.view');
    }

    #[Computed]
    public function users()
    {
        return User::role('admin')
            ->with('roles:id,name')
            ->select('id', 'name')->get();
    }

    #[Computed]
    public function departments()
    {
        return Department::select('id', 'department_name')->get();
    }
};

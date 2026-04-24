<?php

use App\Models\EducationalBackground;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::app-admin')] class extends Component
{
    use WithPagination; // 🔑 enable pagination methods
    
    /**
     * Computed property: total number of users.
     */
    #[Computed]
    public function totalUsersCount()
    {
        return User::role('alumni')->count();
    }

    /**
     * Computed property: paginated users with roles.
     */
    
    #[Computed]
    public function educationalBackgrounds()
    {
        return EducationalBackground::with(['alumniProfile', 'degreeProgram'])
            ->select('id', 'alumni_profile_id', 'degree_program_id', 'graduation_year')
            ->paginate(5);
    }

};
<?php

namespace App\Policies;

use App\Models\AlumniProfile;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AlumniPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, AlumniProfile $alumni)
    {
        return $alumni->educationalBackgrounds()
                    ->whereHas('degreeProgram', function ($q) use ($user) {
                        $q->where('department', $user->department);
                    })->exists();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, AlumniProfile $alumniProfile): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, AlumniProfile $alumniProfile): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, AlumniProfile $alumniProfile): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, AlumniProfile $alumniProfile): bool
    {
        return false;
    }
}

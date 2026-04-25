<?php

use App\Models\ProgramHead;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::app-super-admin')] class extends Component
{
    use WithPagination; // 🔑 enable pagination methods
    
    public $selectedProgramHeads = []; // @var array $selectedProgramHeads IDs of selected Program Heads across all pages
    public $selectAll = false; // @var bool $selectAll Whether all Program Heads are selected
    
    /**
     * Delete all selected program heads.
     * Resets selection after deletion.
     */
    public function deleteSelected()
    {
        ProgramHead::whereIn('id', $this->selectedProgramHeads)->delete();

        $this->selectedProgramHeads = [];
        $this->selectAll = false;

        session()->flash('success', 'Selected program heads deleted successfully.');
    }

    public function updatedSelectAll($value) 
    { 
        if ($value) 
        { 
            // Grab IDs from the all pages, not just current page
            $this->selectedProgramHeads = $this->programHeads->getCollection()
            ->pluck('id')
            ->map(fn($id) => (int) $id)
            ->toArray(); 
        } else { 
            $this->selectedProgramHeads = []; 
        } 
    } 
                     
    public function updatedSelectedProgramHeads() 
    { 
        // Keep header checkbox in sync 
        $this->selectAll = count($this->selectedProgramHeads) === $this->totalProgramHeadsCount(); 
    }

    /**
     * Toggle selection of all Program Heads across pages.
     */
    public function toggleSelectAll()
    {
        $allIds = ProgramHead::pluck('id')->map(fn($id) => (int) $id)->toArray();

        $selectedCount = count($this->selectedProgramHeads);
        $totalCount = $this->totalProgramHeadsCount();

        if (count($this->selectedProgramHeads) === $this->totalProgramHeadsCount()) 
            { 
                $this->selectedProgramHeads = []; 
                $this->selectAll = false; 
            } else { 
                $this->selectedProgramHeads = $allIds; $this->selectAll = true; 
            }
    }

    /**
     * Toggle selection of a single user.
     */
    public function toggleRowSelection($programHeadId)
    {
        if (in_array($programHeadId, $this->selectedProgramHeads)) {
            // Remove if already selected
            $this->selectedProgramHeads = array_values(array_diff($this->selectedProgramHeads, [$programHeadId]));
        } else {
            // Add if not selected
            $this->selectedProgramHeads[] = $programHeadId;
        }

        // Sync header checkbox
        $this->selectAll = count($this->selectedProgramHeads) === $this->totalProgramHeadsCount();
    }
    
     /**
     * Get the total count of Program Heads for pagination logic.
     */

    #[Computed]
    public function totalProgramHeadsCount()
    {
        return ProgramHead::count();
    }

    #[Computed]
    public function programHeads()
    {
        return ProgramHead::with(['user', 'department'])->select('id', 'user_id', 'department_id', 'created_at')->paginate(5);
    }
};
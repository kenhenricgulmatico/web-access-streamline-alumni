<?php

use App\Models\Batch;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.app-super-admin')] class extends Component
{
    #[Computed]
    public function batches()
    {
        return Batch::select('id', 'batch_year', 'created_at')->paginate(5);
    }
};
<?php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;


new #[Layout('layouts.app-alumni')] class extends Component
{

    #[Computed]
    public function alumni()
    {
        return Auth::User();
    }

};

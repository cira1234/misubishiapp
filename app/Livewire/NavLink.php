<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class NavLink extends Component
{
    public function render()
    {
        $userid = Auth::id();
        

        return view('livewire.nav-link',[
            'UserRole'=> User::find($userid)->status
        ]);
    }
}

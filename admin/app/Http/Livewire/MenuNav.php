<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MenuNav extends Component
{
    public function render()
    {
        $user = Auth::user();
        $menus = $user->menus()->get();
        $loja = $user->loja()->first();
        return view('livewire.menu-nav', compact(['menus', 'loja']));
    }
}

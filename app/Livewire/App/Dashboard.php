<?php

namespace App\Livewire\App;

use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    #[Title('داشبورد | گروه کوهنوردی آریا')]
    public function render()
    {
        return view('livewire.app.dashboard');
    }
}

<?php

namespace App\Livewire\App;

use Livewire\Attributes\Title;
use Livewire\Component;

class Programs extends Component
{
    #[Title('برنامه ها | گروه کوهنوردی آریا')]
    public function render()
    {
        return view('livewire.app.programs');
    }
}

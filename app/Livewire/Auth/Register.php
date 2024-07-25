<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\RegisterForm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public RegisterForm $form;


    #[Title('ثبت نام | گروه کوهنوردی آریا')]
    public function register()
    {
        $this->validate();

        $data = array_merge($this->form->all(), [
            'is_active' => false,
            'is_admin' => false,
        ]);

        user()->create($data);

        return $this->redirect('/login', navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}

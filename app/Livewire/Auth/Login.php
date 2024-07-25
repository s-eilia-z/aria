<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        $this->validate();

        $user = user()->findByField('phone', $this->form->phone)->first();

        if (!$user->is_active) return;
        if (!Hash::check($this->form->password, $user->password)) return;

        Auth::login($user, remember: $this->form->remember);

        return $this->redirect('/', navigate: true);
    }

    #[Title('ورود | گروه کوهنوردی آریا')]
    public function render()
    {
        return view('livewire.auth.login');
    }
}

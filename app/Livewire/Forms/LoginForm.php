<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required|string|exists:users,phone|digits:11')]
    public string $phone;

    #[Validate('required|string|min:6')]
    public string $password;

    #[Validate('required|bool')]
    public bool $remember = false;
}

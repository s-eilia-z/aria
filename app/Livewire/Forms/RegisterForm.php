<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{
    #[Validate('required|string|min:5')]
    public string $name;

    #[Validate('required|string|digits:11|unique:users,phone')]
    public string $phone;

    #[Validate('required|string|in:male,female')]
    public string $gender = 'male';

    #[Validate('required|string|min:6')]
    public string $password;
}

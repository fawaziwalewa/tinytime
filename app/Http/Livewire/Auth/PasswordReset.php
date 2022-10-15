<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Validation\Rules\Password;

class PasswordReset extends Component
{
    public $email, $password, $password_confirmation;

    public function mount()
    {
        $this->email = request()->email;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:users'],
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
                'confirmed',
            ],
        ]);
    }

    public function render()
    {
        return view('livewire.auth.password-reset');
    }
}

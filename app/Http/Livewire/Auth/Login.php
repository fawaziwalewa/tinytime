<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password as Pass;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $resetEmail, $reset = false, $forgot = "Forgot Password?";

    public function updated($propertyName)
    {
        if ($this->reset) {
            $this->validateOnly($propertyName, [
                'resetEmail' => ['required', 'string', 'email:rfc,dns', 'max:255', 'exists:users,email'],
            ]);
        }

        $this->validateOnly($propertyName, [
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'exists:users'],
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
        ]);
    }

    public function activate(){
        if ($this->forgot == "Forgot Password?") {
            $this->forgot = "Cancel";
            $this->reset = true;
        }else{
            $this->forgot = "Forgot Password?";
            $this->reset = false;
        }
    }

    public function resetRequest(){
        $this->validate([
            'resetEmail' => ['required', 'string', 'email:rfc,dns', 'max:255', 'exists:users,email'],
        ]);

        $status = Pass::sendResetLink(
          ['email' => $this->resetEmail]
        );
        $this->activate();
        return $status === Pass::RESET_LINK_SENT
                    ? back()->with(['success' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    public function login(){
        $this->validate([
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'exists:users'],
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
        ]);
        $credentials = ['email' => $this->email, 'password' => $this->password];
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }else{
            session()->flash('error', "ERROR! This credentials does not match our records.");
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}

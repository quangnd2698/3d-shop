<?php

namespace App\Livewire\Site;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function mount()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('livewire.site.login')->extends('site.layouts.app-blank');
    }

    public function login () {
        $validate = Validator::make(
            [
                'email' => $this->email,
                'password' => $this->password
            ],
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email không được để trống',
                'email.email' => 'Email không đúng định dạng',
                'password.required' => 'Password không được để trống'
            ]
        );

        if ($validate->fails()) {
            return session()->flash('error', $validate->errors()->first());
        }

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('home');
        } else {
            session()->flash('error', 'Email or password is incorrect');
        }
    }
}

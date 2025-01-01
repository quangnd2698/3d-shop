<?php

namespace App\Livewire\Site;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Register extends Component
{

    public $username;
    public $email;
    public $password;
    public $passwordConfirmation;
    public $errors;

    public function mount()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('livewire.site.register')->extends('site.layouts.app-blank');
    }

    public function register()
    {
        $data = [
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'passwordConfirmation' => $this->passwordConfirmation,
        ];
        $validate = Validator::make($data, [
            'username' => 'required|min:6|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'passwordConfirmation' => 'required|same:password',
        ],[
            'username.required' => 'Tên đăng nhập không được để trống',
            'username.min' => 'Tên đăng nhập phải có ít nhất 6 ký tự',
            'username.unique' => 'Tên đăng nhập đã tồn tại',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'passwordConfirmation.required' => 'Mật khẩu xác nhận không được để trống',
            'passwordConfirmation.same' => 'Mật khẩu xác nhận không trùng khớp',
        ]);
    

        if ($validate->fails()) {
            $this->errors = $validate->errors()->toArray();
            return;
        }
        

        $user = User::create([
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        auth()->login($user);

        return redirect()->route('home');
    }
}

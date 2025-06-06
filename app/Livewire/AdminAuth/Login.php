<?php

namespace App\Livewire\AdminAuth;

use Filament\Notifications\Notification;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Filament\Http\Livewire\Auth\Login as BaseLogin;
use Illuminate\Support\Facades\Auth;

class Login extends BaseLogin
{
    public function authenticate(): LoginResponse
    {
        $data = $this->form->getState();

        if (! Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password'],
        ], $data['remember'] ?? false)) {
            Notification::make()
                ->title('Gagal Login')
                ->danger()
                ->body('Ada masalah saat login')
                ->send();

            $this->addError('email', __('filament-panels::pages/auth/login.form.email.errors'));

            return app(LoginResponse::class);
        }

        session()->regenerate();

        Notification::make()
            ->title('Login Berhasil!')
            ->success()
            ->send();

        return app(LoginResponse::class);
    }
}


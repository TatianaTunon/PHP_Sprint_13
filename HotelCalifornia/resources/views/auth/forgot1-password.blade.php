
@extends('layouts.layout')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="logo mb-3">
				<div class="col-md-12 text-center">
					<h1>Si no recuerdas tus datos</h1>
				</div>
			</div>
        </x-slot>

        <div class="mb-4 text-mg  text-center text-gray-600">
            {{ __('Escrribe tu email y recibirás un enlace para recuperar tu contraseña') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label class="text-lg" for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="btn-danger btn-lg">
                
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

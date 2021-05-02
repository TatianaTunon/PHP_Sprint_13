@extends('layouts.layout')

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo"> </x-slot>
            <div class="logo mb-3">
				<div class="col-md-12 text-center">
					<h1>Regístrate en</h1><h1>Hotel California</h1>
				</div>
			</div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label class="text-lg " for="name" :value="__('Name')" />
                
                <x-input id="name" class="block mt-1 w-full bg-secondary text-white" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label class="text-lg" for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full bg-secondary text-white" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label class="text-lg" for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full bg-secondary text-white"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label class="text-lg"  for="password_confirmation bg-secondary text-white" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full bg-secondary text-white"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-mg text-black-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-3 btn btn-block mybtn btn-secondary tx-tfm">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

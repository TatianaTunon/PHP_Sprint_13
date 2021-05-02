@extends('layouts.partials.head')
@extends('layouts.partials.footer')
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="logo mb-3">
                            <div class="col-md-12 text-center">
                                <h1>Hotel California</h1>
                            </div>
                        </div>
                        <div class="login-form">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="form-group">
                                <x-label class="text-lg " for="name" :value="__('Name')" />
                                    <input id="name" class="au-input au-input--full" type="text" name="name" placeholder="Username" :value="old('name')" required autofocus />
                                </div>
                                <div class="form-group">
                                <x-label class="text-lg" for="email" :value="__('Email')" />
                                    <input id="email" class="au-input au-input--full" type="email" name="email" placeholder="Email" :value="old('email')" required />
                                </div>
                                <div class="form-group">
                                <x-label class="text-lg" for="password" :value="__('Password')" />
                                    <input id="password" class="au-input au-input--full" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
                                </div>
                                <div class="form-group">
                                <x-label class="text-lg" for="password" :value="__('Password')" />
                                    <input id="password_confirmation" class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Password" required />
                                </div>
                                
                                <div class="login-checkbox">
                                <a class="underline text-mg text-black-600 hover:text-gray-900" href="{{ route('login') }}">
                                </a>
                                </div>
                                <x-button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Register') }}</x-button>
                            </form>
                        
                           
                

            






                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </body>
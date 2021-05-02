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
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group">
                    
                                <x-label class="text-lg" for="email" :value="__('Email')" />
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                <x-label class="text-lg" for="password" :value="__('Password')" />
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-black-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-mg text-black-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                    <label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">  {{ __('Forgot your password?') }}</a>
                                    @endif
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="{{ route('register') }}">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>


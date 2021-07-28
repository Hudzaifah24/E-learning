@extends('layouts.auth')

@section('title', 'login Student')

@section('content')
    <div class="container w-2/6 p-10 mx-auto my-16 border-l-4 border-r-4 border-blue-400 shadow-xl rounded-xl">
        <form class="flex-flex-col" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-10 text-2xl font-bold text-center">
                Login
            </div>
            <div class="w-full mb-5 rounded-xl">
                <div class="w-full mb-1 text-center">Email:</div>
                <input id="email" type="email" class="form-control w-full p-2 px-4 text-center border-2 focus:border-blue-400 rounded-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="w-full mb-5 rounded-xl">
                <div class="w-full mb-1 text-center">Password:</div>
                <input id="password" type="password" class="form-control w-full p-2 px-4 text-center border-2 focus:border-blue-400 rounded-xl @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="flex justify-center w-full py-3 mx-auto mb-5 rounded-xl">
                <button type="submit" class="p-2 px-4 bg-blue-400 rounded hover:bg-blue-500">
                    Login
                </button>
            </div>
            <div class="flex flex-row justify-center w-full gap-10">
                <a href="{{ route('login-teacher') }}" class="text-sm hover:text-blue-500 {{ (request()->is('login/teacher*')) ? 'underline font-bold' : '' }}">Teacher</a>
                <a href="{{ route('login-student') }}" class="text-sm hover:text-blue-500 {{ (request()->is('login/student*')) ? 'underline font-bold' : '' }}">Student</a>
            </div>
        </form>
    </div>
@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-0 form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

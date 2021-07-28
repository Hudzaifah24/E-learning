@extends('layouts.auth')

@section('title', 'login Teacher')

@section('content')
    <div class="container w-2/6 p-10 mx-auto my-16 border-l-4 border-r-4 border-blue-400 shadow-xl rounded-xl">
        <div class="flex-flex-col">
            <div class="mb-10 text-2xl font-bold text-center">
                Login
            </div>
            <div class="w-full mb-5 rounded-xl">
                <div class="w-full mb-1 text-center">Email:</div>
                <input type="email" class="w-full p-2 px-4 text-center border-2 focus:border-blue-400 rounded-xl" name="" id="">
            </div>
            <div class="w-full mb-5 rounded-xl">
                <div class="w-full mb-1 text-center">Password:</div>
                <input type="password" class="w-full p-2 px-4 text-center border-2 focus:border-blue-400 rounded-xl" name="" id="">
            </div>
            <div class="flex flex-row justify-center w-full gap-10">
                <a href="{{ route('login-teacher') }}" class="text-sm hover:text-blue-500 {{ (request()->is('login/teacher*')) ? 'underline font-bold' : '' }}">Teacher</a>
                <a href="{{ route('login-student') }}" class="text-sm hover:text-blue-500 {{ (request()->is('login/student*')) ? 'underline font-bold' : '' }}">Student</a>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.dashboard')

@section('title', 'Settings')

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
    <div class="container">
        <div class="">
            <h2 class="dashboard-title">Settings</h2>
            <p class="dashboard-subtitle">Account</p>
        </div>
        <div class="w-full mx-auto my-4">
            <div class="container p-3 mx-auto bg-white rounded-lg shadow">
                <form action="" class="grid grid-cols-6 gap-5">
                    <div class="flex flex-col col-span-2">
                        <div class="mb-2">
                            Name:
                        </div>
                        <div class="">
                            <input type="text" value="Yourname" class="w-full p-2 text-gray-500 border border-black rounded focus:text-black">
                        </div>
                    </div>
                    <div class="flex flex-col col-span-2">
                        <div class="mb-2">
                            Email:
                        </div>
                        <div class="">
                            <input type="email" value="YourEmail" class="w-full p-2 text-gray-500 border border-black rounded focus:text-black">
                        </div>
                    </div>
                    <div class="flex flex-col col-span-2">
                        <div class="mb-2">
                            Password:
                        </div>
                        <div class="relative">
                            <input type="password" value="YourPassword" class="w-full p-2 text-gray-500 border border-black rounded focus:text-black">
                            {{-- <div class="absolute cursor-pointer top-2 right-2" id="click">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div> --}}
                        </div>
                    </div>

                    <div class="flex flex-col col-span-6">
                        <div class="mb-2">
                            Image:
                        </div>
                        <div class="">
                            <input type="text" value="YourImage" class="w-full p-2 text-gray-500 border border-black rounded focus:text-black">
                        </div>
                        <div class="py-2 mx-auto">
                            Or
                        </div>
                        <div class="">
                            <input type="file" id="hidden" value="YourEmail" class="hidden w-full p-2 text-gray-500 border border-black rounded focus:text-black">
                            <button type="button" onclick="document.getElementById('hidden').click();" class="w-full py-2 bg-blue-500 rounded-full hover:bg-blue-600">Browse Image</button>
                        </div>
                    </div>
                    <div class="col-span-1 mt-3 ">
                        <button type="submit" class="w-full p-2 bg-green-500 rounded-lg hover:bg-green-600">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

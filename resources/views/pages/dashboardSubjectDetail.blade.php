@extends('layouts.dashboard')

@section('title', 'Detail Subjects')

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
    <div class="container">
        <div class="">
            <h2 class="dashboard-title">Subjects</h2>
            <p class="dashboard-subtitle">Detail Subjects</p>
        </div>
        <div class="w-full mx-auto my-4">
            <div class="p-5 bg-white shadow-lg rounded-xl">
                <div class="grid w-full grid-cols-10 gap-10">
                    <div class="col-span-5">
                        <img src="{{ $subjects->photo }}" alt="" class="w-full h-full">
                    </div>
                    <div class="flex flex-col items-start justify-center col-span-5">
                        <div class="mb-2 text-4xl font-medium">{{ $subjects->name }}</div>
                        <div class="text-lg ">{{ $subjects->description }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


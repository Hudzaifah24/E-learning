@extends('layouts.dashboard')

@section('title', 'Detail Videos')

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
    <div class="container">
        <div class="">
            <h2 class="dashboard-title">Videos</h2>
            <p class="dashboard-subtitle">Detail Videos</p>
        </div>
        <div class="w-full mx-auto my-4">
            <div class="p-5 bg-white shadow-lg rounded-xl">
                <div class="grid w-full grid-cols-10 gap-10">
                    <div class="col-span-5">
                        <iframe class="w-full lg:h-72 h-60"
                            src="{{ $videos->video }}">
                        </iframe>
                    </div>
                    <div class="flex flex-col items-start justify-center col-span-5">
                        <div class="mb-2 text-4xl font-medium">{{ $videos->title }}</div>
                        <div class="text-lg ">{{ $videos->theories_id }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


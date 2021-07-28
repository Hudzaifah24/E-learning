@extends('layouts.app')

@section('title', 'Video')

@section('content')
    <div class="container relative grid h-full grid-cols-1 gap-10 mx-auto my-20 shadow-xl lg:pb-16 pb-7 lg:px-16 px-7 lg:grid-cols-2 lg:h-480">
        <div class="flex flex-col gap-5">
            <iframe class="w-full lg:h-full h-60" data-aos="fade-down"
                src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
            <div class="flex flex-row justify-between">
                <div class="text-2xl font-semibold capitalize" data-aos="fade-right">
                    HTML Part 1
                </div>
                <a href="https://www.youtube.com/embed/tgbNymZ7vqY" data-aos="fade-left" class="px-3 py-1 mr-5 rounded-full bg-utama hover:bg-utamaHover" download>Download</a>
            </div>
        </div>
        <div class="w-full pb-3 overflow-scroll shadow lg:h-full h-80" data-aos="zoom-in">
            <div class="sticky top-0 w-full p-2 py-3 text-xl font-medium bg-white shadow">
                continue to other videos video :
            </div>
            <div class="flex flex-col h-full p-3">
                <div class="flex flex-row items-center justify-between p-3 shadow">
                    {{-- title --}}
                    <div class="text-base capitalize">
                        HTML Part 2
                    </div>
                    {{-- href --}}
                    <a href="{{ route('videosDetail') }}" class="px-3 py-2 text-sm text-white rounded-full bg-kedua hover:bg-keduaHover">
                        Watching
                    </a>
                </div>
                <div class="flex flex-row items-center justify-between p-3 shadow">
                    {{-- title --}}
                    <div class="text-base capitalize">
                        HTML Part 3
                    </div>
                    {{-- href --}}
                    <a href="{{ route('videosDetail') }}" class="px-3 py-2 text-sm text-white rounded-full bg-kedua hover:bg-keduaHover">
                        Watching
                    </a>
                </div>
                <div class="flex flex-row items-center justify-between p-3 shadow">
                    {{-- title --}}
                    <div class="text-base capitalize">
                        HTML Part 3
                    </div>
                    {{-- href --}}
                    <a href="{{ route('videosDetail') }}" class="px-3 py-2 text-sm text-white rounded-full bg-kedua hover:bg-keduaHover">
                        Watching
                    </a>
                </div>
                <div class="flex flex-row items-center justify-between p-3 shadow">
                    {{-- title --}}
                    <div class="text-base capitalize">
                        HTML Part 3
                    </div>
                    {{-- href --}}
                    <a href="{{ route('videosDetail') }}" class="px-3 py-2 text-sm text-white rounded-full bg-kedua hover:bg-keduaHover">
                        Watching
                    </a>
                </div>
                <div class="flex flex-row items-center justify-between p-3 shadow">
                    {{-- title --}}
                    <div class="text-base capitalize">
                        HTML Part 3
                    </div>
                    {{-- href --}}
                    <a href="{{ route('videosDetail') }}" class="px-3 py-2 text-sm text-white rounded-full bg-kedua hover:bg-keduaHover">
                        Watching
                    </a>
                </div>
                <div class="flex flex-row items-center justify-between p-3 shadow">
                    {{-- title --}}
                    <div class="text-base capitalize">
                        HTML Part 3
                    </div>
                    {{-- href --}}
                    <a href="{{ route('videosDetail') }}" class="px-3 py-2 text-sm text-white rounded-full bg-kedua hover:bg-keduaHover">
                        Watching
                    </a>
                </div>
                <div class="flex flex-row items-center justify-between p-3 shadow">
                    {{-- title --}}
                    <div class="text-base capitalize">
                        HTML Part 3
                    </div>
                    {{-- href --}}
                    <a href="{{ route('videosDetail') }}" class="px-3 py-2 text-sm text-white rounded-full bg-kedua hover:bg-keduaHover">
                        Watching
                    </a>
                </div>
                <div class="flex flex-row items-center justify-between p-3 shadow">
                    {{-- title --}}
                    <div class="text-base capitalize">
                        HTML Part 3
                    </div>
                    {{-- href --}}
                    <a href="{{ route('videosDetail') }}" class="px-3 py-2 text-sm text-white rounded-full bg-kedua hover:bg-keduaHover">
                        Watching
                    </a>
                </div>
                <div class="flex flex-row items-center justify-between p-3 shadow">
                    {{-- title --}}
                    <div class="text-base capitalize">
                        HTML Part 3
                    </div>
                    {{-- href --}}
                    <a href="{{ route('videosDetail') }}" class="px-3 py-2 text-sm text-white rounded-full bg-kedua hover:bg-keduaHover">
                        Watching
                    </a>
                </div>
                <div class="flex flex-row items-center justify-between p-3 shadow">
                    {{-- title --}}
                    <div class="text-base capitalize">
                        HTML Part 3
                    </div>
                    {{-- href --}}
                    <a href="{{ route('videosDetail') }}" class="px-3 py-2 text-sm text-white rounded-full bg-kedua hover:bg-keduaHover">
                        Watching
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

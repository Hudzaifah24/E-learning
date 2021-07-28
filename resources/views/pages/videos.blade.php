@extends('layouts.app')

@section('title', 'Videos from Theory Bpk. Burhan')

@section('content')
    <div class="container relative pb-10 mx-auto my-20 shadow-xl lg:px-20 px-7">
        <div class="flex flex-col items-center justify-center pb-3 mx-auto my-10 border-b-2 border-black lg:my-14">
            <div class="flex flex-row items-center mx-auto">
                <div class="w-16 border-b-2 border-black" data-aos="fade-right"></div>
                <div class="mx-2 text-sm text-ketiga" data-aos="zoom-in">
                    Videos
                </div>
                <div class="w-16 border-b-2 border-black" data-aos="fade-left"></div>
            </div>
            <div class="my-2 text-4xl font-semibold text-center capitalize text-ketiga">
                HTML
            </div>
        </div>
        <div class="grid grid-cols-1 gap-2 lg:gap-10 lg:grid-cols-2">
            <div class="flex flex-col justify-between gap-5 my-5 border-2 lg:my-10 p-7" data-aos="fade-up">
                <iframe class="w-full h-full mx-auto md:h-96"
                    src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
                <a href="{{ route('videosDetail') }}" class="self-center my-2 mr-6 text-3xl font-semibold text-center capitalize duration-150 border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 hover:text-utamaHover">
                    HTML part 1
                </a>
            </div>
            <div class="flex flex-col justify-between gap-5 my-5 border-2 lg:my-10 p-7" data-aos="fade-up">
                <iframe class="w-full h-full mx-auto md:h-96"
                    src="https://www.youtube.com/embed/BiGVVAP3KsQ?start=6">
                </iframe>
                <a href="" class="self-center my-2 mr-6 text-3xl font-semibold text-center capitalize duration-150 border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 hover:text-utamaHover">
                    HTML part 2
                </a>
            </div>
        </div>
    </div>
@endsection

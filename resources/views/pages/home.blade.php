@extends('layouts.app')

@section('title', 'Home')

@section('content')
{{-- content 1 --}}
    <div class="container relative mx-auto my-3">
        <div class="flex flex-col-reverse justify-between lg:flex-row ">
            <div class="flex flex-col items-center justify-center w-full p-5 lg:items-start lg:w-1/2" data-aos="fade-right">
                <div class="text-5xl font-bold text-kedua">
                    ONLINE
                </div>
                <div class="font-extrabold text-7xl text-utama">
                    LEARNING
                </div>
                <div class="text-3xl text-utama">
                    With Teacher Pro
                </div>
                <div class="mt-2 text-sm text-kedua">
                    Live Classes with the teacher pro
                </div>
                <div class="mt-7">
                    <a href="{{ route('subject') }}" class="px-4 py-3 text-white rounded-full bg-utama hover:bg-utamaHover">
                        Go Learning
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-1/2" data-aos="fade-left">
                <img class="w-full" src="https://st2.depositphotos.com/2704315/42745/v/600/depositphotos_427456662-stock-illustration-online-internet-education-concept-vector.jpg" alt="">
            </div>
        </div>
    </div>

{{-- content 2 --}}
    <div class="container relative mx-auto my-32" id="subjects">
        <div class="flex flex-col">
            <div class="flex flex-row items-center gap-2 mx-auto mb-16">
                <div class="text-3xl font-bold text-ketiga" data-aos="fade-right">
                    SUBJECTS
                </div>
                <a href="{{ route('subject') }}" data-aos="zoom-in" data-aos-decoration="1000" class="animate-pulse">
                    <div class="p-2 border-2 border-blue-400 rounded-full hover:border-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </a>
            </div>
            <div class="hidden splide lg:block">
                <div class="splide__track">
                    <ul class="splide__list">
                        @php
                            $ai = 100
                        @endphp
                        @foreach ($subjects as $subject)
                            <li class="rounded shadow-xl splide__slide" data-aos="fade-up" data-aos-delay="{{ $ai+=100 }}">
                                <div class="flex flex-col items-center w-10/12 mx-auto">
                                    <div class="w-full border-b-2 h-72">
                                        <div class="w-full h-full" style="background-image: url('{{ $subject->photo }}'); background-size: cover; background-position: center">
                                        </div>
                                    </div>
                                    <div class="p-3 text-center">
                                        <div class="my-2 text-xl font-semibold uppercase text-utama">
                                            {{ $subject->name }}
                                        </div>
                                        <div class="my-2 text-base font-normal text-ketiga">
                                            {{ $subject->description }}
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        {{-- <li class="splide__slide">
                            <div class="flex flex-col items-center w-10/12 mx-auto">
                                <div class="w-full h-72">
                                    <div class="w-full h-full" style="background-image: url('https://i0.wp.com/www.maxmanroe.com/vid/wp-content/uploads/2019/03/Pengertian-Desain-adalah.jpg?fit=700%2C374&ssl=1'); background-size: cover; background-position: center">
                                    </div>
                                </div>
                                <div class="p-3 text-center">
                                    <div class="my-2 text-xl font-semibold uppercase text-utama">
                                        desain
                                    </div>
                                    <div class="my-2 text-base font-normal text-ketiga">
                                        learn about Desain with great teachers in that field
                                    </div>
                                </div>

                            </div>
                            </li>
                            <li class="splide__slide">
                            <div class="flex flex-col items-center w-10/12 mx-auto">
                                <div class="w-full h-72">
                                    <div class="w-full h-full" style="background-image: url('https://www.jojonomic.com/wp-content/uploads/2020/11/3714285.png'); background-size: cover; background-position: center">
                                    </div>
                                </div>
                                <div class="p-3 text-center">
                                    <div class="my-2 text-xl font-semibold uppercase text-utama">
                                        Network
                                    </div>
                                    <div class="my-2 text-base font-normal text-ketiga">
                                        learn about Computer network Engineering with great teachers in that field
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div id="splide" class="block lg:hidden">
                <div class="splide__track">
                    <ul class="flex splide__list">
                        @foreach ($subjects as $subject)
                            <li class="splide__slide">
                                <div class="flex flex-col items-center w-10/12 mx-auto">
                                    <div class="w-full h-72">
                                        <div class="w-full h-full" style="background-image: url('{{ $subject->photo }}'); background-size: cover; background-position: center">
                                        </div>
                                    </div>
                                    <div class="p-3 text-center">
                                        <div class="my-2 text-xl font-semibold uppercase text-utama">
                                            {{ $subject->name }}
                                        </div>
                                        <div class="my-2 text-base font-normal text-ketiga">
                                            {{ $subject->description }}
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        {{-- <li class="splide__slide">
                            <div class="flex flex-col items-center w-10/12 mx-auto">
                                <div class="w-full h-72">
                                    <div class="w-full h-full" style="background-image: url('https://i0.wp.com/www.maxmanroe.com/vid/wp-content/uploads/2019/03/Pengertian-Desain-adalah.jpg?fit=700%2C374&ssl=1'); background-size: cover; background-position: center">
                                    </div>
                                </div>
                                <div class="p-3 text-center">
                                    <div class="my-2 text-xl font-semibold uppercase text-utama">
                                        desain
                                    </div>
                                    <div class="my-2 text-base font-normal text-ketiga">
                                        learn about Desain with great teachers in that field
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex flex-col items-center w-10/12 mx-auto">
                                <div class="w-full h-72">
                                    <div class="w-full h-full" style="background-image: url('https://www.jojonomic.com/wp-content/uploads/2020/11/3714285.png'); background-size: cover; background-position: center">
                                    </div>
                                </div>
                                <div class="p-3 text-center">
                                    <div class="my-2 text-xl font-semibold uppercase text-utama">
                                        Network
                                    </div>
                                    <div class="my-2 text-base font-normal text-ketiga">
                                        learn about Computer network Engineering with great teachers in that field
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

{{-- content 3 --}}
    <div class="container relative mx-auto my-40">
        <div class="flex flex-col items-center">
            <div class="mb-16 text-4xl font-bold text-center text-ketiga" data-aos="fade-right">
                Introductions
            </div>
            {{-- teachers --}}
                <div class="flex flex-col items-center mb-24">
                    <div class="flex flex-row items-center mb-10">
                        <div class="w-10 border-b-2 border-gray-900" data-aos="fade-right"></div>
                        <div class="mx-2 text-3xl font-semibold text-ketiga" data-aos="zoom-in">
                            Teachers
                        </div>
                        <div class="w-10 border-b-2 border-gray-900" data-aos="fade-left"></div>
                    </div>
                    <div class="grid grid-cols-1 gap-20 lg:grid-cols-3">
                        <div class="flex flex-col col-span-1 p-3 rounded shadow-xl" data-aos="fade-up" data-aos-delay="100">
                            <div class="lg:w-72 w-96 h-72"
                                style="
                                background-image: url('https://sahabatpenakita.id/wp-content/uploads/2019/12/professional-development-tools-for-teachers.jpg'); background-position: center; background-size: cover">
                            </div>
                            <div class="mt-4 mb-2 text-2xl font-bold text-center text-utama">
                                Bpk. Burhan
                            </div>
                            <div class="text-base font-bold text-center text-ketiga">
                                Teacher : ( Programing )
                            </div>
                        </div>
                        <div class="flex flex-col col-span-1 p-3 rounded shadow-xl" data-aos="fade-up" data-aos-delay="200">
                            <div class="lg:w-72 w-96 h-72"
                                style="
                                background-image: url('https://myrepublica.nagariknetwork.com/uploads/media/ddddd_20201129155325.jpg'); background-position: center; background-size: cover">
                            </div>
                            <div class="mt-4 mb-2 text-2xl font-bold text-center text-utama">
                                Bpk. Guntoro
                            </div>
                            <div class="text-base font-bold text-center text-ketiga">
                                Teacher : ( Desain )
                            </div>
                        </div>
                        <div class="flex flex-col col-span-1 p-3 rounded shadow-xl" data-aos="fade-up" data-aos-delay="300">
                            <div class="lg:w-72 w-96 h-72"
                                style="
                                background-image: url('https://www.educationnext.org/wp-content/uploads/2020/03/ednext-sept19-blog-hess-teacher-1024x584.png'); background-position: center; background-size: cover">
                            </div>
                            <div class="mt-4 mb-2 text-2xl font-bold text-center text-utama">
                                Ibu. Rina
                            </div>
                            <div class="text-base font-bold text-center text-ketiga">
                                Teacher : ( Network )
                            </div>
                        </div>
                    </div>
                </div>

            {{-- Students --}}
                <div class="flex flex-col items-center">
                    <div class="flex flex-row items-center mb-12">
                        <div class="w-10 border-b-2 border-gray-900" data-aos="fade-right"></div>
                        <div class="mx-2 text-3xl font-semibold text-ketiga" data-aos="zoom-in">
                            Students
                        </div>
                        <div class="w-10 border-b-2 border-gray-900" data-aos="fade-left"></div>
                    </div>
                    <div class="grid grid-cols-1 gap-20 lg:grid-cols-3">
                        <div class="flex flex-col col-span-1 p-3 rounded shadow-xl" data-aos="fade-up" data-aos-delay="100">
                            <div class="lg:w-72 w-96 h-72"
                                style="
                                background-image: url('https://image.shutterstock.com/image-photo/latin-male-college-student-backpack-260nw-1811959960.jpg'); background-position: center; background-size: cover">
                            </div>
                            <div class="mt-4 mb-2 text-2xl font-bold text-center text-ketiga">
                                Ramadhan Nur
                            </div>
                        </div>
                        <div class="flex flex-col col-span-1 p-3 rounded shadow-xl" data-aos="fade-up" data-aos-delay="200">
                            <div class="lg:w-72 w-96 h-72"
                                style="
                                background-image: url('https://i.pinimg.com/originals/c1/1f/c5/c11fc5356b969a207b906cc2294a21fc.jpg'); background-position: center; background-size: cover">
                            </div>
                            <div class="mt-4 mb-2 text-2xl font-bold text-center text-ketiga">
                                Aditiya putra
                            </div>
                        </div>
                        <div class="flex flex-col col-span-1 p-3 rounded shadow-xl" data-aos="fade-up" data-aos-delay="300">
                            <div class="lg:w-72 w-96 h-72"
                                style="
                                background-image: url('https://media.istockphoto.com/photos/facing-my-future-with-confidence-picture-id1139495117?k=6&m=1139495117&s=612x612&w=0&h=a2hxTvHq7XNN0zMh8m1CuyDPIaNYiswD7iZbh5rpac4='); background-position: center; background-size: cover">
                            </div>
                            <div class="mt-4 mb-2 text-2xl font-bold text-center text-ketiga">
                                Rahma
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

{{-- content 4 --}}
    <div class="container relative px-5 mx-auto my-28">
        <div class="grid grid-cols-1 gap-10 md:grid-cols-3">
            <div class="flex flex-col col-span-1 p-3 bg-white shadow-xl" data-aos="fade-up" data-aos-delay="100">
                <div class="py-1 text-3xl font-bold text-center border-b-2 text-ketiga">
                    Theachers
                </div>
                <div class="p-3 text-3xl font-extrabold text-center text-utamaHover">
                    {{ $teacher }}
                </div>
            </div>
            <div class="flex flex-col col-span-1 p-3 bg-white shadow-xl" data-aos="fade-up" data-aos-delay="200">
                <div class="py-1 text-3xl font-bold text-center border-b-2 text-ketiga">
                    Students
                </div>
                <div class="p-3 text-3xl font-extrabold text-center text-utamaHover">
                    {{ $student }}
                </div>
            </div>
            <div class="flex flex-col col-span-1 p-3 bg-white shadow-xl" data-aos="fade-up" data-aos-delay="300">
                <div class="py-1 text-3xl font-bold text-center border-b-2 text-ketiga">
                    Subjects
                </div>
                <div class="p-3 text-3xl font-extrabold text-center text-utamaHover">
                    {{ $subjects->count() }}
                </div>
            </div>
        </div>
    </div>
@endsection

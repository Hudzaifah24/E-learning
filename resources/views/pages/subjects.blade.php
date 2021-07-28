@extends('layouts.app')

@section('title', 'Subjects')

@section('content')
    <div class="container relative pb-10 mx-auto my-20 shadow-xl px-7 lg:px-20">
        <div class="flex flex-col items-center justify-center pb-3 mx-auto border-b-2 border-black my-14">
            <div class="flex flex-row items-center mx-auto">
                <div class="w-16 border-b-2 border-black" data-aos="fade-right"></div>
                <div class="mx-2 text-sm text-ketiga" data-aos="zoom-in">
                    Subjects
                </div>
                <div class="w-16 border-b-2 border-black" data-aos="fade-left"></div>
            </div>
            <div class="my-2 text-4xl font-semibold text-center capitalize text-ketiga" data-aos="zoom-in">
                All Subjects
            </div>
        </div>
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <div class="relative flex flex-col justify-between h-full gap-10 p-0 shadow-xl md:p-5 md:flex-row md:h-72" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute top-0 z-20 block w-full h-full bg-black opacity-70 md:hidden"></div>
                <div class="absolute top-0 z-10 w-full h-full md:w-1/2 md:relative" style="background-image: url('https://c8.alamy.com/comp/H90H5Y/code-programing-binary-html-information-computer-concept-H90H5Y.jpg'); background-size: cover; background-position: center">
                </div>
                <div class="z-30 flex flex-col items-center justify-center w-full p-5 md:p-0 md:w-1/2 md:items-start">
                    <div class="flex flex-row items-center">
                        <div class="w-10 mr-2 border-b-2 border-white md:border-black md:w-12"></div>
                        <div class="text-sm text-white md:text-ketiga">
                            Subject
                        </div>
                        <div class="w-10 ml-2 border-b-2 border-white md:border-black md:hidden md:w-4/12"></div>
                    </div>
                    <div class="my-2 text-4xl font-semibold text-white capitalize md:text-ketiga">
                        Programing
                    </div>
                    <div class="w-full my-2 overflow-auto text-sm font-normal text-center text-white md:text-left md:w-11/12 md:text-gray-500">
                        programming adalah sebuah proses untuk membuat program di komputer. Program yang dibuat bisa berupa software, website, aplikasi android, dsb.
                    </div>
                    <a href="{{ route('theories') }}" class="self-center px-4 py-2 mt-1 text-center text-white rounded-full md:self-start bg-utama hover:bg-utamaHover">
                        Go Learning
                    </a>
                </div>
            </div>
            <div class="relative flex flex-col justify-between h-full gap-10 p-0 shadow-xl md:p-5 md:flex-row md:h-72" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute top-0 z-20 block w-full h-full bg-black opacity-70 md:hidden"></div>
                <div class="absolute top-0 z-10 w-full h-full md:w-1/2 md:relative" style="background-image: url('https://us.123rf.com/450wm/serezniy/serezniy1809/serezniy180939232/110035288-beautiful-young-teacher-explaining-math-formulas-written-on-blackboard.jpg?ver=6'); background-size: cover; background-position: center">
                </div>
                <div class="z-30 flex flex-col items-center justify-center w-full p-5 md:p-0 md:w-1/2 md:items-start">
                    <div class="flex flex-row items-center">
                        <div class="w-10 mr-2 border-b-2 border-white md:border-black md:w-12"></div>
                        <div class="text-sm text-white md:text-ketiga">
                            Subject
                        </div>
                        <div class="w-10 ml-2 border-b-2 border-white md:border-black md:hidden md:w-4/12"></div>
                    </div>
                    <div class="my-2 text-4xl font-semibold text-white capitalize md:text-ketiga">
                        Desain
                    </div>
                    <div class="w-full my-2 overflow-auto text-sm font-normal text-center text-white md:text-left md:w-11/12 md:text-gray-500">
                        desain adalah kegiatan kreatif untuk merencanakan dan merancang sesuatu yang umumnya fungsional dan tidak ada sebelumnya dalam rangka menyelesaikan suatu masalah tertentu agar memiliki nilai lebih dan menjadi lebih bermanfaat bagi penggunanya.
                    </div>
                    <a href="{{ route('theories') }}" class="self-center px-4 py-2 mt-1 text-center text-white rounded-full md:self-start bg-utama hover:bg-utamaHover">
                        Go Learning
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

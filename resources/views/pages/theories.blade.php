@extends('layouts.app')

@section('title', 'Theories')

@section('content')
    <div class="container relative pb-10 mx-auto my-20 shadow-xl lg:px-20 px-7">
        <div class="flex flex-col items-center justify-center pb-3 mx-auto border-b-2 border-black my-14">
            <div class="flex flex-row items-center mx-auto">
                <div class="w-16 border-b-2 border-black" data-aos="fade-right"></div>
                <div class="mx-2 text-sm text-ketiga" data-aos="zoom-in">
                    Theory
                </div>
                <div class="w-16 border-b-2 border-black" data-aos="fade-left"></div>
            </div>
            <div class="my-2 text-4xl font-semibold text-center capitalize text-ketiga" data-aos="zoom-in">
                programing
            </div>
        </div>
        <div class="flex flex-col items-center justify-between h-full gap-10 p-5 my-10 shadow-lg lg:p-0 lg:items-start lg:h-40 lg:flex-row lg:shadow-none" data-aos="fade-right" data-aos-delay="100">
            <div class="hidden w-2/12 h-full lg:block" style="background-image: url('https://www.techfor.id/wp-content/uploads/2019/12/html.png'); background-size: cover; background-position: center">
            </div>
            <div class="flex flex-col items-center justify-center w-full lg:items-start lg:w-10/12">
                <div class="flex flex-row items-center ">
                    <div class="w-16 border-b-2 border-black"></div>
                    <div class="mx-2 text-sm text-ketiga">
                        Theory
                    </div>
                    <div class="block w-16 border-b-2 border-black lg:hidden"></div>
                </div>
                <div class="flex flex-row items-center">
                    <a href="{{ route('videos') }}" class="my-2 mr-0 text-4xl font-semibold capitalize duration-150 border-b-2 border-blue-500 border-opacity-0 lg:mr-6 text-ketiga hover:border-opacity-100 hover:text-blue-500">
                        HTML
                    </a>
                </div>
                <div class="w-full my-1 text-sm font-normal text-center text-gray-500 lg:text-left lg:w-11/12">
                    HTML adalah singkatan dari Hypertext Markup Language. HTML memungkinkan seorang user untuk membuat dan menyusun bagian paragraf, heading, link atau tautan, dan blockquote untuk halaman web dan aplikasi.
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-between h-full gap-10 p-5 my-10 shadow-lg lg:p-0 lg:items-start lg:h-40 lg:flex-row lg:shadow-none" data-aos="fade-right" data-aos-delay="200">
            <div class="hidden w-2/12 h-full lg:block" style="background-image: url('https://www.techfor.id/wp-content/uploads/2019/12/html.png'); background-size: cover; background-position: center">
            </div>
            <div class="flex flex-col items-center justify-center w-full lg:items-start lg:w-10/12">
                <div class="flex flex-row items-center ">
                    <div class="w-16 border-b-2 border-black"></div>
                    <div class="mx-2 text-sm text-ketiga">
                        Theory
                    </div>
                    <div class="block w-16 border-b-2 border-black lg:hidden"></div>
                </div>
                <div class="flex flex-row items-center">
                    <a href="{{ route('videos') }}" class="my-2 mr-0 text-4xl font-semibold capitalize duration-150 border-b-2 border-blue-500 border-opacity-0 lg:mr-6 text-ketiga hover:border-opacity-100 hover:text-blue-500">
                        CSS
                    </a>
                </div>
                <div class="w-full my-1 text-sm font-normal text-center text-gray-500 lg:text-left lg:w-11/12">
                    CSS adalah bahasa Cascading Style Sheet dan biasanya digunakan untuk mengatur tampilan elemen yang tertulis dalam bahasa markup, seperti HTML. CSS berfungsi untuk memisahkan konten dari tampilan visualnya di situs.
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-between h-full gap-10 p-5 my-10 shadow-lg lg:p-0 lg:items-start lg:h-40 lg:flex-row lg:shadow-none" data-aos="fade-right" data-aos-delay="300">
            <div class="hidden w-2/12 h-full lg:block" style="background-image: url('https://www.techfor.id/wp-content/uploads/2019/12/html.png'); background-size: cover; background-position: center">
            </div>
            <div class="flex flex-col items-center justify-center w-full lg:items-start lg:w-10/12">
                <div class="flex flex-row items-center ">
                    <div class="w-16 border-b-2 border-black"></div>
                    <div class="mx-2 text-sm text-ketiga">
                        Theory
                    </div>
                    <div class="block w-16 border-b-2 border-black lg:hidden"></div>
                </div>
                <div class="flex flex-row items-center">
                    <a href="{{ route('videos') }}" class="my-2 mr-0 text-4xl font-semibold capitalize duration-150 border-b-2 border-blue-500 border-opacity-0 lg:mr-6 text-ketiga hover:border-opacity-100 hover:text-blue-500">
                        PHP
                    </a>
                </div>
                <div class="w-full my-1 text-sm font-normal text-center text-gray-500 lg:text-left lg:w-11/12">
                    PHP  (PHP: Hypertext Preprocessor) adalah sebuah bahasa pemrograman server side scripting yang bersifat open source. Sebagai sebuah scripting language, PHP menjalankan instruksi pemrograman saat proses runtime. Hasil dari instruksi tentu akan berbeda tergantung data yang diproses.
                </div>
            </div>
        </div>
    </div>
@endsection

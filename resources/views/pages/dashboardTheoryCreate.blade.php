@extends('layouts.dashboard')

@section('title', 'Create Theories')

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
    <div class="container">
        <div class="">
            <h2 class="dashboard-title">Theories</h2>
            <p class="dashboard-subtitle">Create Theories</p>
        </div>
        <div class="w-full mx-auto my-4">
            <div class="p-5 bg-white shadow-lg rounded-xl">
                <form action="" class="grid grid-cols-6 gap-5">
                    <div class="flex flex-col col-span-6">
                        <div class="mb-2">
                            Title:
                        </div>
                        <div class="">
                            <input type="text" class="w-1/2 p-2 text-gray-500 border border-black rounded focus:text-black">
                        </div>
                    </div>
                    <div class="flex flex-col col-span-6">
                        <div class="mb-2">
                            Image:
                        </div>
                        <div class="">
                            <input type="text" class="w-full p-2 text-gray-500 border border-black rounded focus:text-black">
                        </div>
                        {{-- <div class="py-2 mx-auto">
                            Or
                        </div>
                        <div class="">
                            <input type="file" id="hidden" value="YourEmail" class="hidden w-full p-2 text-gray-500 border border-black rounded focus:text-black">
                            <button type="button" onclick="document.getElementById('hidden').click();" class="w-full py-2 bg-blue-500 rounded-full hover:bg-blue-600">Browse Image</button>
                        </div> --}}
                    </div>
                    <div class="flex flex-col col-span-6">
                        <div class="mb-2">
                            Description:
                        </div>
                        <div class="">
                            <textarea class="" name="editor" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-span-1 mt-3">
                        <button type="submit" class="w-full p-2 bg-green-500 rounded-lg hover:bg-green-600">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
@endpush

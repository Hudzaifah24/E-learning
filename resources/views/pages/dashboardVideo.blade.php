@extends('layouts.dashboard')

@section('title', 'Videos')

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
    <div class="container">
        <div class="">
            <h2 class="dashboard-title">Videos</h2>
            <p class="dashboard-subtitle">List Videos</p>
        </div>
        <div class="w-full mx-auto my-4">
            <div class="">
                <a href="{{ route('createVideo') }}" class="p-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 hover:no-underline">
                    + Add New Video
                </a>
                <table class="w-full mt-4 border border-collapse border-black">
                    <thead>
                        <tr>
                            <th class="p-2 border border-black">#</th>
                            <th class="p-2 border border-black">Title</th>
                            <th class="p-2 border border-black">Theory</th>
                            <th class="p-2 border border-black">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $video)
                            <tr>
                                <td class="p-2 border border-black">{{ $loop->iteration }}</td>
                                <td class="p-2 border border-black">{{ $video->title }}</td>
                                <td class="p-2 border border-black">{{ $video->theories_id }}</td>
                                <td class="flex flex-row gap-1 p-2 border border-black">
                                    <a href="{{ route('detailVideo', $video->id) }}" class="p-2 bg-green-700 rounded-lg bg hover:bg-green-800 hover:text-white hover:no-underline">
                                        Show
                                    </a>
                                    <a href="{{ route('editVideo', $video->id) }}" class="p-2 bg-yellow-400 rounded-lg hover:bg-yellow-500 hover:text-white hover:no-underline">
                                        Edit
                                    </a>
                                    <form action="" class="">
                                        <button type="submit" class="p-2 bg-red-500 rounded-lg hover:bg-red-600 hover:text-white hover:no-underline">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('pages.videos', compact('videos'));
    }

    public function detail()
    {
        $videos = Video::all();
        return view('pages.DetailVideo', compact('videos'));
    }
}

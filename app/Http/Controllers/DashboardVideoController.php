<?php

namespace App\Http\Controllers;

use App\Models\Theory;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardVideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();

        return view('pages.dashboardVideo', compact('videos'));
    }

    public function show($id)
    {
        $videos = Video::find($id);
        return view('pages.dashboardVideoDetail', compact('videos'));
    }

    public function create()
    {
        $theories = Theory::all();
        return view('pages.dashboardVideoCreate', compact('theories'));
    }

    public function store()
    {
        //
    }

    public function edit($id)
    {
        $theories = Theory::all();
        $videos = Video::find($id);
        return view('pages.dashboardVideoEdit', compact('videos', 'theories'));
    }

    public function update(Request $request, $id)
    {
        //
    }
}

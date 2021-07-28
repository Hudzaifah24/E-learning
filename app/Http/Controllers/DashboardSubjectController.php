<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class DashboardSubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('pages.dashboardSubject', compact('subjects'));
    }

    public function show($id)
    {
        $subjects = Subject::find($id);
        return view('pages.dashboardSubjectDetail', compact('subjects'));
    }

    public function create()
    {
        return view('pages.dashboardSubjectCreate');
    }

    public function store()
    {
        //
    }

    public function edit($id)
    {
        $subjects = Subject::find($id);
        return view('pages.dashboardSubjectEdit', compact('subjects'));
    }

    public function update(Request $request, $id)
    {
        //
    }
}

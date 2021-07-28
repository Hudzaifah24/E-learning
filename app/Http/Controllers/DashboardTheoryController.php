<?php

namespace App\Http\Controllers;

use App\Models\Theory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardTheoryController extends Controller
{
    public function index()
    {
        $theories = Theory::all();
        return view('pages.dashboardTheory', compact('theories'));
    }

    public function show($id)
    {
        $theories = Theory::find($id);
        return view('pages.dashboardTheoryDetail', compact('theories'));
    }

    public function create()
    {
        return view('pages.dashboardTheoryCreate');
    }

    public function store()
    {
        //
    }

    public function edit($id)
    {
        $theories = Theory::find($id);
        return view('pages.dashboardTheoryEdit', compact('theories'));
    }

    public function update(Request $request, $id)
    {
        //
    }
}

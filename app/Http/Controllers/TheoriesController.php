<?php

namespace App\Http\Controllers;

use App\Models\Theory;
use Illuminate\Http\Request;

class TheoriesController extends Controller
{
    public function index()
    {
        $theories = Theory::all();
        return view('pages.theories', compact('theories'));
    }
}

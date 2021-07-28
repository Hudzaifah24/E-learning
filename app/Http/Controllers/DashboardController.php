<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Subject;
use App\Models\Theory;
use App\Models\Video;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $theories = Theory::count();
        $subjects = Subject::count();
        $videos = Video::count();
        $reviews = Review::count();
        return view('pages.dashboard', compact('theories', 'videos', 'reviews', 'subjects'));
    }
}

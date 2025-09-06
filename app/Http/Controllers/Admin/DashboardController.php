<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Portfolio;
use App\Models\User;
use App\Models\Attendance;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
{
    $totalArticles   = \App\Models\Article::count();
    $totalPortfolios = \App\Models\Portfolio::count();
    $totalUsers      = \App\Models\User::count();

    // Hitung absensi hari ini
    $today = Carbon::today()->toDateString();
    $totalAttendanceToday = Attendance::where('date', $today)->count();

    return view('admin.dashboard', compact(
        'totalArticles',
        'totalPortfolios',
        'totalUsers',
        'totalAttendanceToday'
    ));
}
}

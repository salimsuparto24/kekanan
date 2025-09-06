<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->toDateString();
        $attendance = Attendance::where('user_id', Auth::id())
                                ->where('date', $today)
                                ->first();

        return view('frontend.absensi.index', compact('attendance'));
    }

    public function checkIn()
    {
        $today = Carbon::today()->toDateString();

        $attendance = Attendance::firstOrCreate(
            ['user_id' => Auth::id(), 'date' => $today],
            ['check_in' => now()]
        );

        return back()->with('success', 'Berhasil Check In');
    }

    public function checkOut()
    {
        $today = Carbon::today()->toDateString();

        $attendance = Attendance::where('user_id', Auth::id())
                                ->where('date', $today)
                                ->first();

        if ($attendance && !$attendance->check_out) {
            $attendance->update(['check_out' => now()]);
        }

        return back()->with('success', 'Berhasil Check Out');
    }
}

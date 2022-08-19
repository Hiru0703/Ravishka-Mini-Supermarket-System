<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class AttendanceController extends Controller
{

    public function markUser(Request $request)
    {
        $attendance = new Attendance;
        $attendance->user_id = $request->id;
        $attendance->save();
        return view('attendance');
    }

    public function attendance()
    {
        $user = Attendance::where('created_at', '=',  Carbon::today())->get();
        return $user ;
        return view('attendance');
    }
    
}

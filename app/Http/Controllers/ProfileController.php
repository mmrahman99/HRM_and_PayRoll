<?php

namespace App\Http\Controllers;

use App\Models\AttendanceManager;
use App\Models\Employee;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function show(){

        $details = Employee::where('user_id', \Auth::user()->id)->with('userrole.role')->first();
        $events = $this->convertToArray(Event::where('date', '>', Carbon::now())->orderBy('date','desc')->take(3)->get());


        return view('hrms.profile', compact('details','events'));
    }

    public function convertToArray($values)
    {
        $result = [];
        foreach($values as $key => $value) {
            $result[$key] = $value;
        }
        return $result;
    }

    public function signIn(Request $request)
    {
        $id = Auth::id();


        $msg = "already signed in";

        $msg1 = "just signed in";

        $date = today();

//        $users = DB::table('employees')->select('name', 'code','user_id')->where('user_id', '=', $id)->first();


        $check = AttendanceManager::where('user_id', $id)->first();

//        dd($check);

        if ($check == null) {
            $user = Employee::find($id);


            $new = new AttendanceManager();
            $new->name = $user->name;
            $new->code = $user->code;
            $new->user_id = $user->user_id;
            $new->date = $date;
            $new->save();

            dd($msg1);
        } elseif (Carbon::parse($check->date) == today()) {
//            echo 'alert(already signed in)';
            dd($msg);

            return view('hrms.profile');

//            dd(today());

        } else {

            $user = Employee::find($id);


            $new = new AttendanceManager();
            $new->name = $user->name;
            $new->code = $user->code;
            $new->user_id = $user->user_id;
            $new->date = $date;
            $new->save();

            dd($msg1);
//
//

            return $new;


        }


//
//


    }


    public function signOut()
    {
        $id = Auth::id();

        $msg = "already signed in";

        $msg1 = "signed out";

        $msg2 = "already signed out";

        $date = today();


        $check = AttendanceManager::where('user_id', $id)->first();

        if (Carbon::parse($check->date) == today()) {

            $sign_out = AttendanceManager::where('user_id', $id)
                ->where('date', $date)->first();

            $in = Carbon::parse($check->in_time);
            $out = Carbon::parse($check->out_time);
            $mins = $out->diff($in)->format('%h:%i:%s');

            $sign_out->out_time = Carbon::now();
            $sign_out->hours_worked = $mins;
            $sign_out->save();

            dd($mins);

            $sign_out->save();

            $hours = $check->in_time - $check->out_time;

            dd($msg1);
        } else {
            dd($msg2);
        }


        return;
    }
}

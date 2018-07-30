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
            $new->in_time = Carbon::now();
            $new->save();

//            dd($msg1);
        } elseif (Carbon::parse($check->date) == today()) {
//            echo 'alert(already signed in)';
//            dd($msg);

            return view('hrms.profile');

//            dd(today());

        } else {

            $user = Employee::find($id);


            $new = new AttendanceManager();
            $new->name = $user->name;
            $new->code = $user->code;
            $new->user_id = $user->user_id;
            $new->date = $date;
            $new->in_time = Carbon::now();
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
//
//        $msg = "already signed in";
//
//        $msg1 = "signed out";
//
//        $msg2 = "already signed out";
        $date = today();
        $check = AttendanceManager::where('user_id', $id)->orderBy('id', 'DESC')->first();

//        $time = Carbon::parse($check->date);
//        dd($time);

        if (Carbon::parse($check->date) == today() and $check->hours_worked == null) {

//            dd($msg);
            $sign_out = AttendanceManager::where('user_id', $id)->orderBy('id', 'DESC')->where('date', $date)->first();

            $time = Carbon::now();
            $hrs = Carbon::parse('5:30:00')->toTimeString();


            $in = Carbon::parse($check->in_time);
            $out = Carbon::parse($time);
            $wrk = $out->diff($in)->format('%h:%i:%s');
//            $out = $out->add($wrk)->format('%h:%i:%s');;


//            dd($out);

            //

            $sign_out->hours_worked = $wrk;
            $sign_out->out_time = Carbon::now();
            $sign_out->save();

            dd($out);


        }
//        elseif ((Carbon::parse($check->date) == today()) AND Carbon::parse($check->hours_worked) != null){
////            echo 'alert(already signed in)';
////            dd($msg);
//
//            $sign_out = AttendanceManager::where('user_id', $id)->orderBy('id', 'DESC')->where('date', $date)->first();
//
//            return view('hrms.profile');
//        }
        else {
            dd($msg2);
        }


        return;
    }
}

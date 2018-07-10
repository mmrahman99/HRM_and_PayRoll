<?php

namespace App;
use App\Models\Employee;
use App\Models\Project;
use App\Models\UserRole;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','access_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne(
            Employee::class,
            'user_id',
            'id');
    }

    public function role()
    {
        return $this->hasOne(
            'App\Models\UserRole',
            'user_id',
            'id');
    }

    public function isHR()
    {
        $userId = Auth::user()->id;
        $userRole = UserRole::where('user_id', $userId)->first();
        if($userRole->role_id == 7 || $userRole->role_id == 1)
        {
            return true;
        }
        return false;
    }

    public function notAnalyst()
    {
        $userId = Auth::user()->id;
        $userRole = UserRole::where('user_id', $userId)->first();
        if($userRole->role_id != 3)
        {
            return true;
        }
        return false;
    }

    public function isCoordinator()
    {
        $userId = Auth::user()->id;
        $userRole = UserRole::where('user_id', $userId)->first();
        $roleIds = [2,5,7,8,9,10,14,16];
        if(in_array($userRole->role_id, $roleIds) )
        {
            return true;
        }
        return false;
    }

    public function isManager(){
                $userId = Auth::user()->id;
        $userRole = UserRole::where('user_id', $userId)->first();
        if($userRole->role_id == 16)
        {
            return true;
        }
        return false;
    }


//    public function isAdmin()
//    {
//        $access = Auth::user()->access_type;
//        if($access == 'admin'){
//            return true;
//        }
//        return false;
//
////        $userId = Auth::user()->id;
////        $userRole = UserRole::where('user_id', $userId)->first();
////        if($userRole->role_id == 16)
////        {
////            return true;
////        }
////        return false;
//    }
//
////    public function isManager()
////    {
////        $access = Auth::user()->access_type;
////        if($access == 'manager'){
////            return true;
////        }
////        return false;
////
//////        $userId = Auth::user()->id;
//////        $userRole = UserRole::where('user_id', $userId)->first();
//////        if($userRole->role_id == 16)
//////        {
//////            return true;
//////        }
//////        return false;
////    }
//
//    public function isEmployee(){
//        $access = Auth::user()->access_type;
//        if($access == 'admin' || $access == 'admin' || $access == 'admin'){
//            return true;
//        }
//        return false;
//
////        $userId = Auth::user()->id;
////        $userRole = UserRole::where('user_id', $userId)->first();
////        if($userRole->role_id == 16)
////        {
////            return true;
////        }
////        return false;
//    }
//
    public function project()
    {
        return $this->hasMany(Project::class);
    }

    public function schemes(){
        return $this->belongsToMany(
            tax_schemes::class,
            employee_tax_schemes::class ,
            'employee_id',
            'scheme_id',
            'id',
            'id');
    }

    public function payslips(){
        return $this->hasMany(
            payslips::class,
            'employee_id',
            'id');
    }

    public function expenditures(){
        return $this->hasMany(
            Expense::class,
            'user_id',
            'id');
    }

    public function assignedTasks()
    {
        return $this->belongsToMany(
            tasks::class,
            'task_assign_to',
            'assigned_to_id',
            'task_id',
            'id',
            'id'
        );
    }


}

<?php

namespace App;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class payslips extends Model
{
    public function user()
    {
        return $this->hasOne(User::class, 'employee_id', 'id');
    }

    public function employee()
    {
        return $this->hasManyThrough(
            Employee::class,
            User::class,
            'user_id',
            'employee_id',
            'id',
            'id');
    }


}

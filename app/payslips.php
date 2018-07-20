<?php

namespace App;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class payslips extends Model
{
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'employee_id');
    }



}

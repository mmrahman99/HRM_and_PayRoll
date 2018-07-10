<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payslips extends Model
{
    public function employees(){
        return $this->belongsTo(User::class, 'employee_id', 'id');
    }
}

<?php

namespace App;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    public function employees(){
        return $this->hasMany(Employee::class, 'department', 'id');
    }

}

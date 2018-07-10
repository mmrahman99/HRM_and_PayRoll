<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function employee()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function task(){
        return $this->belongsTo(tasks::class,'task_id', 'id');
    }


}

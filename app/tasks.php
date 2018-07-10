<?php

namespace App;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{

    public function assignedBy(){
        return $this->belongsTo(
            User::class,
            'assigned_by',
            'id'
        );
    }

    public function assignedTo(){
        return $this->belongsToMany(
            User::class,
            'task_assign_to',
            'task_id',
            'assigned_to_id',
            'id',
            'id'
        );
    }

    public function project(){
        return $this->belongsTo(
            Project::class,
            'project_id',
            'id'
        );
    }

    public function expenditure(){
        return $this->hasMany(
            Expense::class,
            'task_id',
            'id'
        );
    }
}

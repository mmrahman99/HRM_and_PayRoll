<?php

    namespace App\Models;

    use App\tasks;
    use Illuminate\Database\Eloquent\Model;

    class Project extends Model
    {
        protected $guarded = [];

        public function client()
        {
            return $this->belongsTo(Client::class);
        }

        public function tasks(){
            return $this->hasMany(tasks::class, 'project_id', 'id');
        }



    }

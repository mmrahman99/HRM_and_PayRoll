<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tax_schemes extends Model
{
    public function user(){
        return $this->belongsToMany(
            User::class,
            employee_tax_schemes::class ,
            'scheme_id',
            'employee_id',
            'id',
            'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = [];

    public function students()
    {
        return $this->belongsToMany(Student::class);/**/
    }
}

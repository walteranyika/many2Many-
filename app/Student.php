<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded=[];
    public function subjects()
    {
        return $this->belongsToMany(Subject::class);/**/
    }
}

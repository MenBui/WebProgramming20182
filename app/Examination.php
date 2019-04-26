<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    protected $table = 'examination';
    public $timestamps = 'false';

    public function course(){
        return $this->belongsTo('App\Course', 'course_id', 'course_id');
    }
}

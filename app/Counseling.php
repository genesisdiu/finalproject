<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counseling extends Model
{
    protected $fillable = [
        'id', 'startTime', 'endTime' , 'day','no_student', 'faculty_id' ,'updated_at', 'created_at'
    ];
    public function Faculty()
    {
        return $this->belongsTo('App\User');
    }
}

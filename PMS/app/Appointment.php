<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Appointment extends Model
{
    protected $fillable =[
        'doctor_name','appointment_takenby','date','time',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
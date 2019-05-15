<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable =[
        'patient_name','med_name','image','test','blood_group','age','disease',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}


<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contacts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable=[
        'role_id' , 'name' , 'username' , 'email' , 'password'
    ];
    protected $hidden = [
        'password' , 'remmber_token',
    ];
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    public function appointment()
    {
        return $this->hasmany('App\Appointment');
    }
    public function prescription()
    {
        return $this->hasmany('App\Prescription');
    }
    public function scopeDoctor($query)
    {
        return $query->where('role_id','2');
    }

}
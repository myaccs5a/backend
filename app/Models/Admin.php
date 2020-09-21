<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Admin extends Authenticatable
{
    use Notifiable;

    protected $table='admin';
    protected $guard = "admin";


    protected $fillable = [
        'name', 'email', 'password','avatar','admin_role_id','email_verified_at',
    ];

    protected $hidden = [
        'password', 'remember_token','admin_role_id'
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'admin_role', 'role_id', 'admin_id');
    }
}

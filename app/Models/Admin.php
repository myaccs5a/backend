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
        'name', 'email', 'password','avatar','email_verified_at',
    ];

    protected $hidden = [
        'password', 'remember_token','role_id'
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function hasPermisson(Permission $permission){
         return !! optional(optional($this->role)->permissions)->contains($permission);
    }

}

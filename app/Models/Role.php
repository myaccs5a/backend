<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table='roles';

    protected $fillable=[
        'name','display_name',
    ];

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission','permission_role', 'role_id', 'permission_id');
    }
}

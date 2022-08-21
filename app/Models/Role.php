<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'slug',
        'description',
    ];

    public function permission_roles(){
        return $this->hasMany(PermissionRoles::class,'role_id','id');
    }
}

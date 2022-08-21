<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'slug'
    ];

    public function permission_roles(){
        return $this->hasMany(PermissionRoles::class,'permission_id','id');
    }
}

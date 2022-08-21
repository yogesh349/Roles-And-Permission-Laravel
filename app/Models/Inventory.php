<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'qtu',
        'description',
        'image'

    ];

    public function product(){
        return $this->hasMany(Product::class,'inventory_id','id');
    }
}

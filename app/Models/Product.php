<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'quantity',
        'rate',
        'description',
        'image',
        'inventory_id',

    ];

    public function sales(){
        return $this->hasMany(Sales::class,'prod_id','id');
    }


}

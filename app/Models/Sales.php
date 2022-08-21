<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable=[
        'slug',
        'invoice_num',
        'description',
        'discount',
        'prod_id',
        'user_id',
    ];

    
    public function products(){
        return $this->belongsTo(Product::class,'id');
    }
}

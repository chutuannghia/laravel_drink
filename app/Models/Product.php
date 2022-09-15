<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function Type_product(){
        return $this->belongsTo(Type_product::class,'id_type','id');
    }
    public function Bill_detail(){
        return $this->hasMany(Bill_detail::class,'id_product','id');
    }
}

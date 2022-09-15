<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_product extends Model
{
    use HasFactory;
    protected $table = 'type_product';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function Product(){
        return $this->hasMany(Product::class,'id_type','id');
    }
}

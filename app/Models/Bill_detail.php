<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
    use HasFactory;
    protected $table = 'bill_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function Product(){
        return $this->belongsTo(Product::class,'id_product','id');
    }
    public function Bills(){
        return $this->belongsTo(Bills::class,'id_bill','id');
    }
}

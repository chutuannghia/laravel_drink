<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;
    protected $table = 'bills';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function Customer(){
        return $this->belongsTo(Customer::class,'id_customer','id');
    }
    public function Bill_detail(){
        return $this->hasMany(Bill_detail::class,'id_bill','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    protected $table ='hosonhansu';
    protected $primaryKey = 'MaNV';
    public $incrementing = false;
    public function user(){
        return $this->belongsTo(User::class,'employee_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monan extends Model
{
    use HasFactory;
    protected $fillable = ['tenma','mota','loaimon','giama','imgma'];
}

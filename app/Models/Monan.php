<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Thucdon;

class Monan extends Model
{
    use HasFactory;
    protected $fillable = ['tenma','mota','loaimon','giama','imgma'];
    public function CacThucdon(){
        return $this->BelongsToMany(Thucdon::class);
    }
}

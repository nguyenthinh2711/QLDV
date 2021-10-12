<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Hoadondv;

class Dichvu extends Model
{
    use HasFactory;
    protected $fillable = ['tendv','loaidv_id','giadv','chitiet','imgdv'];
    public function CacHoadondv(){
        return $this->BelongsToMany(Hoadondv::class);
    }
}

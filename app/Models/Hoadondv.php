<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dichvu;

class Hoadondv extends Model
{
    use HasFactory;
    public function CacDichvu(){
        return $this->BelongsToMany(Dichvu::class)->withPivot('soluong','giadv');
    }
}

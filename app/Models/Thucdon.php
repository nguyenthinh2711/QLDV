<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thucdon extends Model
{
    use HasFactory;
    public function CacMonAn(){
        return $this->BelongsToMany(Monan::class);
    }
}

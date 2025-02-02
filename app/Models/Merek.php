<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;

    public function Produk()
    {
        return $this->hasMany(Produk::class, 'id_merek');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function productos(){
        return $this->hasMany(Producto::class);
    }
}

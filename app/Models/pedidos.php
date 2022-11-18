<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    public $timestamps = false;
    protected $fillable = ['Articulo', 'Cantidad', 'Precio', 'User_id', 'Foto_id'];
    use HasFactory;
    public function usuarios()
    {
        return $this->belongsTo(users::class, 'User_id');
    }
    public function fotos()
    {
        return $this->belongsTo(fotos::class, 'Foto_id');
    }
}


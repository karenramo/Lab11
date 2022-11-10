<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class envios extends Model
{
    use HasFactory;
    public function usuarios()
    {
        return $this->belongsTo(usuario::class);
    }
    public function productos()
    {
        return $this->belongsTo(productos::class);
    }
}

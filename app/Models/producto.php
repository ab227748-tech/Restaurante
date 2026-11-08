<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        'categoria',
        'activo',
        'vistaprincipal',
    ];

    public function categoria()
    {
        return $this->belongsTo(categoria::class, 'categoriaid');
    }

}

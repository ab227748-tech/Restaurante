<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $fillable = [
        'nombrecategoria',
        'estado',
    ];

    public function productos()
    {
        return $this->hasMany(producto::class, 'categoriaid');
    }
}

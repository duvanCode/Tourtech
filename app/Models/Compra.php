<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nombre',
        'Ciudad',
        'Telefono',
        'Cedula',
        'producto_id',
        'Direccion',
        'Unity',
        'Correo',
        'Postal',
        'Departamento',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'Nombre',
        'Precio',
        'Descripcion',
        'Perfil',
        'Foto1',
        'Foto2',
        'Foto3',
        'Unidades',
    ];

}

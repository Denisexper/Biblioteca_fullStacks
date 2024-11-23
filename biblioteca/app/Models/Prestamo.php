<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{

    protected $fillable = [
        'libro_id',
        'users_id',
        'fecha_prestamo',
        'fecha_devolucion',
        'estado',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    //RELACION ENTRE PRESTAMO Y LIBRO
    public function libros()
    {
        return $this->belongsToMany(Libro::class, 'libro_prestamo', 'prestamo_id', 'libro_id');
    }
}

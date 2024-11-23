<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'titulo',
        'isbn',
        'autor_id',
        'editorial_id',
        'genero_id',
        'anio_de_publicacion',
    ];

    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }

    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    //RELACION ENTRE TABLAS LIBRO Y PRESTAMOS TENEMOS QUE CREAR UNA TABLA PIVOTE 
    public function prestamos()
    {
        return $this->belongsToMany(Prestamo::class, 'libro_prestamo', 'libro_id', 'prestamo_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    protected $fillable = [
        'gender_name',
    ];

    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $fillable = [
        'name',
        'direccition',
    ];

    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}

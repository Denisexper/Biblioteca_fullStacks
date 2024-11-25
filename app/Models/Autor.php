<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{

    protected $fillable = [
        'name',
        'lastname1',
        'lastname2',
        'country_aring',
    ];

    public function libro()
    {
        return $this->hasMany(Libro::class);
    }
}

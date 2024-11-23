<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Genero;
use App\Models\Libro;
use App\Models\Prestamo;
use App\Models\User;

class AutorTypeOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Libros', Libro::query()->count()),
            Card::make('Generos', Genero::query()->count()),
            Card::make('Prestamos', Prestamo::query()->count()),
            Card::make('Autores', Autor::query()->count()),
            Card::make('Editoriales', Editorial::query()->count()),
            Card::make('Usuarios', User::query()->count()),

        ];
    }
}

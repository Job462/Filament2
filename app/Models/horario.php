<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Filament\Panel;
use Filament\Models\Contracts\FilamentUser;
use Spatie\Permission\Traits\HasRoles;

class horario extends Model
{
    use HasFactory;
    protected $table='horarios';

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->hasRole('Admin');
    }
}

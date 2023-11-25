<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Filament\Panel;
use Filament\Models\Contracts\FilamentUser;
use Spatie\Permission\Traits\HasRoles;

class reserva extends Model
{
    use HasFactory;
    public function cliente(){
        return $this->BelongsTo(User::class,'id_user','id');
    }
    public function horario(){
        return $this->BelongsTo(horario::class,'id_horario','id');
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->hasRole('Admin');
    }
}

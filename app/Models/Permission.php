<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as ModelsPermission;
use Filament\Panel;
use Filament\Models\Contracts\FilamentUser;
use Spatie\Permission\Traits\HasRoles;

class Permission extends ModelsPermission
{
    use HasFactory;

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->hasRole('Admin');
    }
}

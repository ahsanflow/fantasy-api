<?php

namespace App\Traits;

use App\Models\FantasyTeam;
use Illuminate\Database\Eloquent\Relations\HasMany;


trait UserTrait
{
    public function fantasyTeams(): HasMany
    {
        return $this->hasMany(FantasyTeam::class);
    }
}

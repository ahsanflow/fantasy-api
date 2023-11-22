<?php

namespace App\Traits;

use App\Models\League;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasLeague
{
    public function league(): League
    {
        return $this->leagueRelation;
    }

    /**
     * Get the user that owns the HasLeague
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function leagueRelation(): BelongsTo
    {
        return $this->belongsTo(League::class, 'league_id');
    }
}

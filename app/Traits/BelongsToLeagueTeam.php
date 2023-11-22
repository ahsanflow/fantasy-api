<?php

namespace App\Traits;

use App\Models\LeagueTeam;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToLeagueTeam
{
    public function leagueTeam(): LeagueTeam
    {
        return $this->leagueTeamRelation;
    }

    /**
     * Get the league team that the player belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function leagueTeamRelation(): BelongsTo
    {
        return $this->belongsTo(LeagueTeam::class, 'league_team_id');
    }
}

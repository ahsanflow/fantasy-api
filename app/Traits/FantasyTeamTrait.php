<?php
// app/Traits/FantasyTeamTrait.php

namespace App\Traits;

use App\Models\FantasyTeamPlayer;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait FantasyTeamTrait
{
    use UserTrait;
    public function players()
    {
        return $this->hasMany(FantasyTeamPlayer::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

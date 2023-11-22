<?php

namespace App\Traits;

use App\Models\Player;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait FantasyTeamPlayerTrait
{
    use UserTrait;

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
}

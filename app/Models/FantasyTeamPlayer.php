<?php

namespace App\Models;

use App\Traits\FantasyTeamPlayerTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FantasyTeamPlayer extends Model
{
    use HasFactory;
    use FantasyTeamPlayerTrait;

    protected $fillable = [
        'fantasy_team_id',
        'player_id',
        'price',
        'position_in_team',
        // add other fields related to the player in the fantasy team
    ];

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
}

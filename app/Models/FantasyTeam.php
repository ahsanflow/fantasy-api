<?php

namespace App\Models;

use App\Traits\FantasyTeamTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FantasyTeam extends Model
{
    use HasFactory;
    use FantasyTeamTrait;

    protected $fillable = [
        'user_id',
        'name',
        'budget',
        // add other fantasy team-related fields
    ];
}

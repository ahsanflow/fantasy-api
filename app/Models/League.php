<?php

namespace App\Models;

use App\Traits\ModelHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class League extends Model
{
    use HasFactory;
    use ModelHelpers;

    const TABLE = 'leagues';

    protected $table = self::TABLE;

    protected $fillable = [
        'name',
        'format',
        'country',
    ];

    public function leagueTeams(): HasMany
    {
        return $this->hasMany(LeagueTeam::class, 'league_id');
    }

    public function id(): string
    {
        return (string) $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }
    public function format(): string
    {
        return $this->format;
    }

    public function country(): string
    {
        return $this->country;
    }
}

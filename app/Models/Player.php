<?php

namespace App\Models;

use App\Traits\ModelHelpers;
use App\Traits\BelongsToLeagueTeam;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;
    use BelongsToLeagueTeam;
    use ModelHelpers;

    const TABLE = 'players';

    protected $table = self::TABLE;

    protected $fillable = [
        'name',
        'country',
        'position',
        'salary',
        'league_team_id',
    ];

    public function id(): string
    {
        return (string) $this->id;
    }
    public function name(): string
    {
        return $this->name;
    }
    public function country(): string
    {
        return $this->country;
    }
    public function position(): string
    {
        return $this->position;
    }
    public function salary(): string
    {
        return $this->salary;
    }
}

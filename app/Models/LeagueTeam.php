<?php

namespace App\Models;

use App\Traits\HasLeague;
use App\Traits\ModelHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeagueTeam extends Model
{
    use HasFactory;
    use HasLeague;
    use ModelHelpers;

    const TABLE = 'league_teams';

    protected $table = self::TABLE;

    protected $fillable = [
        'name',
        'league_id',
    ];

    public function id(): string
    {
        return (string) $this->id;
    }
    public function name(): string
    {
        return $this->name;
    }
}

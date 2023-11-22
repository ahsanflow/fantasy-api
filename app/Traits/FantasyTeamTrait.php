<?php
// app/Traits/FantasyTeamTrait.php

namespace App\Traits;

use App\Models\FantasyTeamPlayer;


trait FantasyTeamTrait
{
    use UserTrait;
    public function players()
    {
        return $this->hasMany(FantasyTeamPlayer::class);
    }
}

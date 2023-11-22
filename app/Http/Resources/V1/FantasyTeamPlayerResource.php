<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FantasyTeamPlayerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'fantasy_team_id' => $this->fantasy_team_id,
            'fantasy_team_info' => FantasyTeamResource::make($this->fantasyTeam),
            'player_id' => $this->player_id,
            'player_info' => PlayerResource::make($this->player),
        ];
    }
}

<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use App\Http\Resources\V1\LeagueResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PlayerResource extends JsonResource
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

            'id' => $this->id(),
            'player_info' => [
                'name' => $this->name(),
                'country' => $this->country(),
                'position' => $this->position(),
                'salary' => $this->salary(),
            ],
            'team_info' => LeagueTeamResource::make($this->leagueTeam()),
            // 'league_id' => LeagueResource::make($this->league())->id,
            'league_id' => $this->leagueInfo(),
        ];
    }
    /**
     * Get league information.
     *
     * @return array<string, mixed>
     */
    private function leagueInfo(): array
    {
        $league = $this->leagueTeam()->league();

        return [
            'id' => $league->id,
            'name' => $league->name,
            'format' => $league->format,
            'country' => $league->country,
        ];
    }
}

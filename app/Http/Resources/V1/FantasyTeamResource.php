<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FantasyTeamResource extends JsonResource
{
    public static $wrap = 'fantasy_team';
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
            'name' => $this->name,
            'budget' => $this->budget,
            'user_info' => UserResource::make($this->user),
        ];
    }
}

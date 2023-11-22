<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FantasyTeamPlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fantasy_team_id' => $this->faker->numberBetween(1, 6), // Assuming fantasy team IDs are from 1 to 10
            'player_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\LeagueTeam;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $positions = ['batsman', 'bowler', 'all-rounder', 'wicketkeeper'];
        $salary = [10000, 15000, 20000, 25000, 30000, 35000, 40000, 45000, 50000, 55000, 60000, 65000, 70000, 75000, 80000, 85000, 90000, 95000, 100000];
        return [
            'name' => $this->faker->name,
            'country' => $this->faker->country,
            'position' => $this->faker->randomElement($positions),
            'salary' => $this->faker->randomElement($salary),
            'league_team_id' => $this->faker->numberBetween(1, 6),
        ];
    }
}

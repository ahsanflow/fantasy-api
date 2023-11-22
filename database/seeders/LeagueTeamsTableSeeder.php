<?php

namespace Database\Seeders;

use App\Models\LeagueTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeagueTeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LeagueTeam::factory()->count(6)->create(['league_id' => 1]);
    }
}

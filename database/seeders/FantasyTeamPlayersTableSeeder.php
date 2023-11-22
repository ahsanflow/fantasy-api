<?php

namespace Database\Seeders;

use App\Models\FantasyTeamPlayer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FantasyTeamPlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FantasyTeamPlayer::factory()->count(40)->create();
    }
}

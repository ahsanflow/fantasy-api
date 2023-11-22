<?php

namespace Database\Seeders;

use App\Models\FantasyTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FantasyTeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FantasyTeam::factory()->count(6)->create();
    }
}

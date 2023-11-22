<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\FantasyTeam;
use App\Models\FantasyTeamPlayer;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password'  => bcrypt('admin')
        ]);
        \App\Models\User::factory(5)->create();

        $this->call(UsersTableSeeder::class);
        $this->call(LeaguesTableSeeder::class);
        $this->call(LeagueTeamsTableSeeder::class);
        $this->call(PlayerTableSeeder::class);
        $this->call(FantasyTeamTableSeeder::class);
        $this->call(FantasyTeamPlayersTableSeeder::class);
    }
}

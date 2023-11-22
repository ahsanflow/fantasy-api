<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fantasy_team_players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fantasy_team_id')->constrained('fantasy_teams');
            $table->foreignId('player_id')->constrained('players');
            // $table->decimal('price', 10, 2);
            // $table->integer('position_in_team');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fantasy_team_players');
    }
};

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\API\V1\LeagueController;
use App\Http\Controllers\API\V1\PlayersController;
use App\Http\Controllers\API\V1\LeagueTeamsController;
use App\Http\Controllers\API\V1\FantasyTeamsController;
use App\Http\Controllers\API\V1\FantasyTeamPlayersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/teams', [UserController::class, 'userTeams']);
    Route::get('/{userId}/teams/{teamId}', [UserController::class, 'userTeamPlayers']);
    Route::post('/', [UserController::class, 'store']);
    // Add other routes related to users if needed
});
Route::prefix('league')->group(function () {
    Route::get('/', [LeagueController::class, 'index']);
    Route::get('/{id}', [LeagueController::class, 'show']);
    // Route::post('/', [UserController::class, 'store']);
    // Add other routes related to users if needed
});
Route::prefix('league_team')->group(function () {
    Route::get('/', [LeagueTeamsController::class, 'index']);
    Route::get('/{id}', [LeagueTeamsController::class, 'show']);
    // Route::post('/', [UserController::class, 'store']);
    // Add other routes related to users if needed
});
Route::prefix('players')->group(function () {
    Route::get('/', [PlayersController::class, 'index']);
    Route::get('/{id}', [PlayersController::class, 'show']);
    // Route::post('/', [UserController::class, 'store']);
    // Add other routes related to users if needed
});
Route::prefix('fantasy_teams')->group(function () {
    Route::get('/', [FantasyTeamsController::class, 'index']);
    Route::get('/{id}', [FantasyTeamsController::class, 'show']);
    // Route::post('/', [UserController::class, 'store']);
    // Add other routes related to users if needed
});
Route::prefix('fantasy_team_players')->group(function () {
    Route::get('/', [FantasyTeamPlayersController::class, 'index']);
    Route::get('/{id}', [FantasyTeamPlayersController::class, 'show']);
    // Route::post('/', [UserController::class, 'store']);
    // Add other routes related to users if needed
});
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

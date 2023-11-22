<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\LeagueTeamCollection;
use App\Models\LeagueTeam;
use Illuminate\Http\Request;

class LeagueTeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $league_teams = LeagueTeam::all(); // Update the model name

        // return response()->json(compact('league_teams'), 200);
        return new LeagueTeamCollection(LeagueTeam::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $league_team = LeagueTeam::find($id); // Update the model name

        if (!$league_team) {
            return response()->json(['message' => 'League Team not found'], 404);
        }

        return response()->json(compact('league_team'), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LeagueTeam $leagueTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LeagueTeam $leagueTeam)
    {
        //
    }
}

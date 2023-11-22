<?php

namespace App\Http\Controllers\API\V1;

use App\Models\FantasyTeam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\FantasyTeamResource;
use App\Http\Resources\V1\FantasyTeamCollection;

class FantasyTeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fantasyTeams = FantasyTeam::all();

        return new FantasyTeamCollection($fantasyTeams);
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
        $fantasyTeam = FantasyTeam::findOrFail($id);

        return new FantasyTeamResource($fantasyTeam);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FantasyTeam $fantasyTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FantasyTeam $fantasyTeam)
    {
        //
    }
}

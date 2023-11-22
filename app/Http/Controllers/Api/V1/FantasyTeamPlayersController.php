<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;
use App\Models\FantasyTeamPlayer;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\FantasyTeamPlayerResource;
use App\Http\Resources\V1\FantasyTeamPlayerCollection;

class FantasyTeamPlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fantasyTeamPlayers = FantasyTeamPlayer::all();

        return new FantasyTeamPlayerCollection($fantasyTeamPlayers);
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
        $fantasyTeamPlayer = FantasyTeamPlayer::findOrFail($id);

        return new FantasyTeamPlayerResource($fantasyTeamPlayer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FantasyTeamPlayer $fantasyTeamPlayer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FantasyTeamPlayer $fantasyTeamPlayer)
    {
        //
    }
}

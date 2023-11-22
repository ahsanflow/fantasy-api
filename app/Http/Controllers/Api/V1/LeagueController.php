<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\LeagueCollection;
use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $leagues = League::all(); // Update the model name

        // return response()->json(compact('leagues'), 200);

        return new LeagueCollection(League::all());
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
        $league = League::find($id); // Update the model name

        if (!$league) {
            return response()->json(['message' => 'League not found'], 404);
        }

        return response()->json(compact('league'), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, League $league)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(League $league)
    {
        //
    }
}

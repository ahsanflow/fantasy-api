<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PlayerCollection;
use App\Http\Resources\V1\PlayerResource;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return new PlayerCollection(Player::all());
        $players = Player::paginate(10); // You can adjust the number based on your needs

        return new PlayerCollection($players);
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
        $player = Player::find($id); // Update the model name

        if (!$player) {
            return response()->json(['message' => 'League Team not found'], 404);
        }

        return response()->json(compact('player'), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
    }
}

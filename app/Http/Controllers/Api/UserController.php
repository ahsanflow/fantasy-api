<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use Illuminate\Validation\ValidationException;
use App\Http\Resources\V1\FantasyTeamPlayerCollection;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // $users = User::all(); // Update the model name

        // return response()->json(['users' => $users], 200);
        $users = User::all();

        return UserResource::collection($users);
    }

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $user = User::find($id); // Update the model name

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json(['user' => $user], 200);
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate(User::validationRules()); // Update the model name

            $user = User::create($validatedData); // Update the model name

            return response()->json(['user' => $user], 201);
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()], 422);
        }
    }
    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function userTeams($id)
    {
        $user = User::findOrFail($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $fantasyTeams = $user->fantasyTeams;

        return response()->json(['user' => $user, 'fantasy_teams' => $fantasyTeams], 200);
    }
    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */

    public function userTeamPlayers($userId, $teamId)
    {
        $user = User::findOrFail($userId);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $team = $user->fantasyTeams()->findOrFail($teamId);
        $players = new FantasyTeamPlayerCollection($team->players);
        // Eager load the 'players' relationship to retrieve detailed player information
        $team->load('players');
        return response()->json(compact('team', 'user', 'players'), 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\user\UserUpdateRequest;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function show($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }

    public function store(UserStoreRequest $request)
    {
        $data = $request->all();

        $user = User::create($data);

        return response()->json($user, 201);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $data = $request->all();

        $user = User::find($id);
        $user->update($data);

        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json(['deleted_user'=>$user]);
    }
}

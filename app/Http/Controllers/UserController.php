<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\user\UserUpdateRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getAllUsers();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = $this->userRepository->getUserById($id);
        return response()->json($user);
    }

    public function store(UserStoreRequest $request)
    {
        $data = $request->all();
        $user = $this->userRepository->createUser($data);
        return response()->json($user, 201);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $data = $request->all();
        $user = $this->userRepository->updateUser($id, $data);
        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = $this->userRepository->deleteUser($id);
        return response()->json(['deleted user'=>$user,'message'=>"user was deleted"]);
    }
}

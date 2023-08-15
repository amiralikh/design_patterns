<?php

namespace App\Http\Controllers;

use App\Adapters\UserAdapter;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\user\UserUpdateRequest;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return $this->userRepository->all();
    }

    public function show($id)
    {
        return $this->userRepository->find($id);
    }

    public function store(UserStoreRequest $request)
    {
        return $this->userRepository->create($request->all());
    }

    public function update(UserUpdateRequest $request, $id)
    {
        return $this->userRepository->update($id, $request->all());
    }

    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return response()->json(['message' => 'User deleted']);
    }
}

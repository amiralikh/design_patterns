<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getAllUsers()
    {
        return $this->model->all();
    }

    public function getUserById($id)
    {
        return $this->model->find($id);
    }

    public function createUser(array $data)
    {
        return $this->model->create($data);
    }

    public function updateUser($id, array $data)
    {
        $user = $this->model->find($id);
        $user->update($data);
        return $user;
    }

    public function deleteUser($id)
    {
        $user = $this->model->findOrFail($id);
        $user->delete();
        return $user;
    }
}

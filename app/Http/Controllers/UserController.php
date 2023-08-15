<?php

namespace App\Http\Controllers;

use App\Facades\UserFacade;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return UserFacade::getAllUsers();
    }

    public function show($id)
    {
        return UserFacade::getUserById($id);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        return UserFacade::createUser($data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        return UserFacade::updateUser($id, $data);
    }

    public function destroy($id)
    {
        return UserFacade::deleteUser($id);
    }
}

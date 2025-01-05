<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterfaces;
use App\Models\User;

class UserRepository implements UserRepositoryInterfaces
{
    public function getAllUsers()
    {
        return User::all();
    }
    public function getUserById($id)
    {
        return User::where(['id' => $id])->first();
    }

    public function createUser(array $data)
    {
        return User::create($data);
    }

    public function updateUser(array $data, $id)
    {
        $user = $this->getUserById($id);

        return $user->update($data);
    }

    public function deleteUser($id)
    {
        return User::destroy($id);
    }

}

<?php

namespace App\Interfaces;

interface UserRepositoryInterfaces
{
    public function getAllUsers();

    public function getUserById($id);

    public function createUser(array $data);

    public function updateUser(array $data, int $id);

    public function deleteUser(int $id);

}

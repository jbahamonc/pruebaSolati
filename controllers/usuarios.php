<?php

namespace App\Controller;

use Models\DAO\UsuarioDAO as UserDAO;
use Models\DTO\UsuarioDTO as UserDTO;
use Service\UserService as UserService;

/**
 *  Clase controladora que gestiona los usuarios
 */

class Usuarios
{
    public function index()
    {
        $users = UserDAO::select();
        print(json_encode($users));
    }

    public function saveUser() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $user = new UserDTO($username, $email, $password);

        UserDAO::register($user);

        print(
            json_encode(
                [
                    "status" => 201,
                    "message" => "El usuario ha sido creado"
                ]
            )
        );
    }

}
?>
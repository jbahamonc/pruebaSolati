<?php

namespace Models\DAO;

use \Core\Database as DB;

/**
 *  Gestion de usuarios
 */
class UsuarioDAO
{

    /**
     *  Metodo que registra en la base de datos un usuario
     * @param $user usuario ha registrar
     */
    public static function register($user)
    {

        try {
            $conn = DB::instance();
            $query = "INSERT INTO user(username, email, password) VALUES(?,?,?)";
            $res = $conn->prepare($query);
            $res->bindValue(1, $user->getUsername(), \PDO::PARAM_STR);
            $res->bindValue(2, $user->getEmail(), \PDO::PARAM_STR);
            $res->bindValue(3, $user->getPass(), \PDO::PARAM_STR);

            $res->execute();
            $conn->close();
            return ['ok' => true];

        } catch (\PDOException $e) {
            return ['ok' => false, 'error' => 'Error1!: ' . $e->getMessage()];
        }
    }

    /**
     * Retorna todos los usuarios registrados en la DB
     */
    public static function select()
    {
        try {

            $conn = DB::instance();
            $query = "SELECT * FROM user";
            $res = $conn->prepare($query);
            $res->execute();
            $conn->close();
            return $res->fetchAll();

        } catch (\PDOException $e) {
            return [];
        }
    }


}
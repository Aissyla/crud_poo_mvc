<?php
class Connexion
{
    private static  $connex;

    public static function  getConnexion()
    {

        try {
            self::$connex = new PDO('mysql:host=localhost;dbname=crud;charset=utf8', 'root', '');
        } catch (PDOException $ex) {
            die("Erreur : " . $ex->getMessage());
        }
        return self::$connex;
    }
}

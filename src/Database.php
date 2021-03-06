<?php
//Connections a PDO

namespace App;

use Exception;
use PDO;

//Cette classe permet d'effectuer la connection à la base de données
class Database {

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    protected $pdo;

    public function __construct($db_name = 'DBdasilva', $db_user = 'dasilva', $db_pass = 'dasilva', $db_host = 'servinfo-mariadb')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    // On se connecte a la base de donnée
    protected function getPDO()
    {
        // Si on n'est pas encore connecté, on se connecte, sinon on renvoie juste pdo pour éviter de faire pleins de connexions
        if($this->pdo === null){
            try {
                $pdo = new PDO('mysql:dbname=DBdasilva;host=servinfo-mariadb', 'dasilva', 'dasilva', [
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Affichage d'erreur
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ // Les valeurs renvoyés d'une requete sont sous forme d'objets
                ]);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                $this->pdo = $pdo;
            } catch(Exception $e){
                echo 'Error : ' . $e->getMessage() . '<br/>';
                echo 'Numero : ' . $e->getCode();
            }

        }
        return $this->pdo;
    }

}
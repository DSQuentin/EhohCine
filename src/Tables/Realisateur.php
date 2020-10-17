<?php

namespace App\Tables;

use App\Database;

class Realisateur extends Database{

    public function findAll()
    {
        $query =
            "SELECT id, nomreal, prenomreal, naissancereal, biographie, urlphoto
                    FROM realisateur";
        $req = $this->getPDO()->prepare($query);
        $req->execute();
        return $req->fetchAll();

    }

    public function findRealById($id)
    {
        $query =
            "SELECT realisateur.id, nomreal, prenomreal, naissancereal, biographie, urlphoto
                    FROM realisateur
                    INNER JOIN film
                    ON film.real_id = realisateur.id
                    WHERE realisateur.id = ?";
        $req = $this->getPDO()->prepare($query);
        $req->execute([$id]);
        return $req->fetch();
    }
    
    public function updateReal($id,$nomreal, $prenomreal, $naissancereal, $biographie, $urlphoto)
    {
        $query =
            "UPDATE realisateur (nomreal, prenomreal, naissancereal, biographie, urlphoto)
            set nomreal = :nomreal, prenomreal = :prenomreal, naissancereal = :naissancereal, biographie = :biographie, urlphoto = :urlphoto
            WHERE id = :id";
        $req = $this->getPDO()->prepare($query);
        $req->execute([
            ':nomreal' => $nomreal,
            ':prenomreal' => $prenomreal,
            ':naissancereal' => $naissancereal,
            ':biographie' => $biographie,
            ':urlphoto' => $urlphoto,
            ':id' => $id
        ]);
    }

    public function deleteReal($id)
    {
        $query =
            "DELETE FROM realisateur
            where id = $id";
        $req = $this->getPDO()->prepare($query);
        $req->execute();
    }

}
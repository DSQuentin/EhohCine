<?php

namespace App\Tables;

use App\Database;

class Realisateur extends Database{

    public function findAll()
    {
        $query =
            "SELECT id, nomreal, prenomreal
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

    public function insertReal($nomreal, $prenomreal, $naissancereal, $biographie, $urlphoto)
    {
        $query =
            "INSERT INTO realisateur (nomreal, prenomreal, naissancereal, biographie, urlphoto)
            values (:nomreal, :prenomreal, :naissancereal, :biographie, :urlphoto)";
        $req = $this->getPDO()->prepare($query);
        $req->execute([
            'nomreal' => $nomreal,
            'prenomreal' => $prenomreal,
            'naissancereal' => $naissancereal,
            'biographie' => $biographie,
            'urlphoto' => $urlphoto
        ]);
    }

}
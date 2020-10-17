<?php

namespace App\Tables;

use App\Database;

class Genre extends Database{

    public function findAll()
    {
        $query =
            "SELECT id, nomgenre
                    FROM genre";
        $req = $this->getPDO()->prepare($query);
        $req->execute();
        return $req->fetchAll();
    }

    public function insertGenre($nomgenre)
    {
        $query =
            "INSERT INTO genre (nomgenre)
            values (:nomgenre)";
        $req = $this->getPDO()->prepare($query);
        $req->execute([
            'nomgenre' => $nomgenre
        ]);
    }

    public function deleteGenre($id)
    {
        $query =
            "DELETE FROM genre
            where id = $id";
        $req = $this->getPDO()->prepare($query);
        $req->execute();
    }
}
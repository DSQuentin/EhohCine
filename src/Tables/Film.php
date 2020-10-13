<?php

//findById
//findByRealId
//findbyGenreId

//insertFilm($name, $real_id, $genre_id, ......) qui va juste faire $this->db->query('INSERT INTO films machin')
//deleteFilm() $this->db->query('DELETE FROM truc')
//updateFilm() $this->db->query('UPDATE truc')

namespace App\Tables;

use App\Database;

class Film extends Database {

    public function findAll()
    {
        $query =
            "SELECT film.id, nomfilm, anneereal, synopsis, nomreal, prenomreal, nomgenre, urlaffiche
                    FROM film
                    INNER JOIN realisateur
                    ON film.real_id = realisateur.id
                    INNER JOIN genre
                    ON film.genre_id = genre.id";
        $req = $this->getPDO()->prepare($query);
        $req->execute();
        return $req->fetchAll();
    }

    public function findById($id)
    {
        $query =
                    "SELECT film.id, nomfilm, anneereal, synopsis, nomreal, prenomreal, nomgenre, urlaffiche, real_id
                    FROM film
                    INNER JOIN realisateur
                    ON film.real_id = realisateur.id
                    INNER JOIN genre
                    ON film.genre_id = genre.id
                    WHERE film.id = ?";
        $req = $this->getPDO()->prepare($query);
        $req->execute([$id]);
        return $req->fetch();
    }

    public function findByRealId($id)
    {
        $query =
            "SELECT film.id, nomfilm, anneereal, synopsis, nomreal, prenomreal, nomgenre, urlaffiche
                    FROM film
                    INNER JOIN realisateur
                    ON film.real_id = realisateur.id
                    INNER JOIN genre
                    ON film.genre_id = genre.id
                    WHERE film.real_id = ?";
        $req = $this->getPDO()->prepare($query);
        $req->execute([$id]);
        return $req->fetchAll();
    }

    public function findByGenreId($id)
    {
        $query =
            "SELECT film.id, nomfilm, anneereal, synopsis, nomreal, prenomreal, nomgenre, urlaffiche
                    FROM film
                    INNER JOIN realisateur
                    ON film.real_id = realisateur.id
                    INNER JOIN genre
                    ON film.genre_id = genre.id
                    WHERE film.genre_id = ?";
        $req = $this->getPDO()->prepare($query);
        $req->execute([$id]);
        return $req->fetch();
    }

    public function find3Last()
    {
        $query =
            "SELECT film.id, nomfilm, anneereal, synopsis, nomreal, prenomreal, nomgenre, urlaffiche
                    FROM film
                    INNER JOIN realisateur
                    ON film.real_id = realisateur.id
                    INNER JOIN genre
                    ON film.genre_id = genre.id
                    ORDER BY film.id
                    DESC LIMIT 3";
        $req = $this->getPDO()->prepare($query);
        $req->execute();
        return $req->fetchAll();
    }

    public function insertFilm($nomfilm, $anneereal, $synopsis, $real_id, $genre_id, $urlaffiche)
    {
        $query =
            "INSERT INTO film (nomfilm, anneereal, synopsis, genre_id, real_id, urlaffiche)
            values (:nomfilm, :anneereal, :synopsis, :genre_id, :real_id, :urlaffiche)";
        $req = $this->getPDO()->prepare($query);
        $req->execute([
            'nomfilm' => $nomfilm,
            'anneereal' => $anneereal,
            'synopsis' => $synopsis,
            'genre_id' => $genre_id,
            'real_id' => $real_id,
            'urlaffiche' => $urlaffiche
        ]);
    }

    public function deleteFilm($id)
    {
        $query =
            "DELETE FROM film
            where id = $id";
        $req = $this->getPDO()->prepare($query);
        $req->execute();
    }

    public function getUrl()
    {
        return '/pages/film.php?id=' . $this->id;
    }

}
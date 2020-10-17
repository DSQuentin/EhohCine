<?php

//findById
//findByRealId
//findbyGenreId

//insertFilm($name, $real_id, $genre_id, ......) qui va juste faire $this->db->query('INSERT INTO films machin')
//deleteFilm() $this->db->query('DELETE FROM truc')
//updateFilm() $this->db->query('UPDATE truc')

namespace App\Tables;

use App\Database;
use function var_dump;

//Comme cette class extends la classe Database, elle permet d'effectuer automatiquement une connexion a PDO lorsqu'on l'instancie
class Film extends Database {

    //Selectionne tous les films de la base de donnée
    //Jointure avec la table Real pour associer les ID et afficher le prenom et nom du real
    //Jointure avec la table Genre pour associer l'id et affiche le nom du genre
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

    //Selectionne les films ayant l'id passé en paramètre
    public function findById($id)
    {
        $query =
                    "SELECT film.id, nomfilm, anneereal, synopsis, nomreal, prenomreal, nomgenre, urlaffiche, real_id, genre_id
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

    //Sélectionne les films ayant l'id du réalisateur passé en paramètre
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
            "SELECT film.id, nomfilm, anneereal, synopsis, nomreal, prenomreal, nomgenre, urlaffiche, real_id, genre_id
                    FROM film
                    INNER JOIN realisateur
                    ON film.real_id = realisateur.id
                    INNER JOIN genre
                    ON film.genre_id = genre.id
                    WHERE film.genre_id = ?";
        $req = $this->getPDO()->prepare($query);
        $req->execute([$id]);
        return $req->fetchAll();
    }

    //Selectionne les trois derniers films ajouter dans la base de données
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

    //Insert un nouveau film dans la base de données
    public function insertFilm($nomfilm, $anneereal, $synopsis, $genre_id, $real_id, $urlaffiche)
    {
        $query =
                "INSERT INTO film (nomfilm, anneereal, synopsis, genre_id, real_id, urlaffiche)
                VALUES (:nomfilm, :anneereal, :synopsis, :genre_id, :real_id, :urlaffiche)";
            $req = $this->getPDO()->prepare($query);
            $req->execute([
                ':nomfilm' => $nomfilm,
                ':anneereal' => (int)$anneereal,
                ':synopsis' => $synopsis,
                ':genre_id' => (int)$genre_id,
                ':real_id' => (int)$real_id,
                ':urlaffiche' => $urlaffiche
            ]);

    }

    
    //Update le film
    public function updateFilm($id, $nomfilm, $anneereal, $synopsis, $genre_id, $real_id, $urlaffiche)
    {
        $query =
                "UPDATE film
                SET nomfilm = :nomfilm, anneereal = :anneereal, synopsis = :synopsis, genre_id = :genre_id, real_id = :real_id, urlaffiche = :urlaffiche
                WHERE film.id = :id";
            $req = $this->getPDO()->prepare($query);
            $req->execute([
                ':nomfilm' => $nomfilm,
                ':anneereal' => $anneereal,
                ':synopsis' => $synopsis,
                ':genre_id' => $genre_id,
                ':real_id' => $real_id,
                ':urlaffiche' => $urlaffiche,
                ':id' => $id]);
    }

    //Supprime le film dont l'id est passé en paramètre de la base de données
    public function deleteFilm($id)
    {
        $query =
            "DELETE FROM film
            where id = $id";
        $req = $this->getPDO()->prepare($query);
        $req->execute();
    }

    //Selectionne les films de la base de données qui ressemble à la recherche de l'utilisateur
    public function researchByName($search)
    {
        $query =
            "SELECT film.id, nomfilm, anneereal, synopsis, nomreal, prenomreal, nomgenre, urlaffiche, real_id
                    FROM film
                    INNER JOIN realisateur
                    ON film.real_id = realisateur.id
                    INNER JOIN genre
                    ON film.genre_id = genre.id
                    WHERE LOWER(nomfilm) LIKE :search";
        $req = $this->getPDO()->prepare($query);
        $req->execute([':search' => $search]);
        return $req->fetchAll();
    }

    //Selectionne les films de la base de données trié par nom
    public function sortByName()
    {
        $query =
            "SELECT film.id, nomfilm, anneereal, synopsis, nomreal, prenomreal, nomgenre, urlaffiche
                    FROM film
                    INNER JOIN realisateur
                    ON film.real_id = realisateur.id
                    INNER JOIN genre
                    ON film.genre_id = genre.id
                    ORDER BY nomfilm";
        $req = $this->getPDO()->prepare($query);
        $req->execute();
        return $req->fetchAll();
    }

    //Selectionne les films de la base de données trié par genre
    public function sortByGenre()
    {
        $query =
            "SELECT film.id, nomfilm, anneereal, synopsis, nomreal, prenomreal, nomgenre, urlaffiche
                    FROM film
                    INNER JOIN realisateur
                    ON film.real_id = realisateur.id
                    INNER JOIN genre
                    ON film.genre_id = genre.id
                    ORDER BY genre.nomgenre";
        $req = $this->getPDO()->prepare($query);
        $req->execute();
        return $req->fetchAll();
    }

    //Selectionne les films de la base de données trié par réalisateur
    public function sortByReal()
    {
        $query =
            "SELECT film.id, nomfilm, anneereal, synopsis, nomreal, prenomreal, nomgenre, urlaffiche
                    FROM film
                    INNER JOIN realisateur
                    ON film.real_id = realisateur.id
                    INNER JOIN genre
                    ON film.genre_id = genre.id
                    ORDER BY realisateur.nomreal";
        $req = $this->getPDO()->prepare($query);
        $req->execute();
        return $req->fetchAll();
    }


}
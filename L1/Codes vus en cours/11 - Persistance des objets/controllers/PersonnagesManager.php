<?php

class PersonnagesManager
{
    private PDO $db;

    public function __construct()
    {
        $dbName = "demo";
        $port = 3306;
        $username = "root";
        $password = "root";
        try {
            $this->setDb(new PDO("mysql:host=localhost;dbname=$dbName;port=$port", $username, $password));
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function setDb($db)
    {
        $this->db = $db;
        return $this;
    }

    public function add(Personnage $personnage)
    {
        $req = $this->db->prepare("INSERT INTO `personnage` (nom, pv, pm) VALUES(:nom, :pv, :pm)");

        $req->bindValue(":nom", $personnage->getNom(), PDO::PARAM_STR);
        $req->bindValue(":pv", $personnage->getPv(), PDO::PARAM_INT);
        $req->bindValue(":pm", $personnage->getPm(), PDO::PARAM_INT);

        $req->execute();
    }

    public function update(Personnage $personnage)
    {
        $req = $this->db->prepare("UPDATE `personnage` SET nom = :nom, pv = :pv, pm = :pm WHERE id = :id");

        $req->bindValue(":id", $personnage->getId(), PDO::PARAM_INT);
        $req->bindValue(":nom", $personnage->getNom(), PDO::PARAM_STR);
        $req->bindValue(":pv", $personnage->getPv(), PDO::PARAM_INT);
        $req->bindValue(":pm", $personnage->getPm(), PDO::PARAM_INT);

        $req->execute();
    }

    public function get(int $id)
    {
        $req = $this->db->prepare("SELECT * FROM `personnage` WHERE id = :id");
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();

        $donnees = $req->fetch();
        $personnage = new Personnage($donnees);
        return $personnage;
    }

    public function getAll(): array
    {
        $personnages = [];
        $req = $this->db->query("SELECT * FROM `personnage`");
        $req->execute();

        $donnees = $req->fetchAll();
        foreach ($donnees as $donnee) {
            $personnages[] = new Personnage($donnee);
        }

        return $personnages;
    }

    public function delete(int $id): void
    {
        $req = $this->db->prepare("DELETE FROM `personnage` WHERE id = :id");
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();
    }
}

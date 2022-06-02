<?php
class CommentaireManager
{
    private $db;

    // Methode 
    public function __construct()
    {
        $dbName = 'blog';
        $port = 8889;
        $username = 'root';
        $password = '1DCF17F798';
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


    public function add(Commentaire $commentaire)
    {
        $req = $this->db->prepare("INSERT INTO `commentaire` (content, created_at, author, id_article) VALUES(:content, :created_at, :author, :id_article)");

        $req->bindValue(":content", $commentaire->getContent(), PDO::PARAM_STR);
        $req->bindValue(":created_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        $req->bindValue(":author", $commentaire->getAuthor(), PDO::PARAM_STR);
        $req->bindValue(":id_article", $commentaire->getId_article(), PDO::PARAM_INT);

        $req->execute();
    }

    public function update(Commentaire $commentaire)
    {
        $req = $this->db->prepare("UPDATE `commentaire` SET  content = :content, created_at = :created_at, author = :author, WHERE id = :id");

        $req->bindValue(":id", $commentaire->getId(), PDO::PARAM_INT);
        $req->bindValue(":content", $commentaire->getContent(), PDO::PARAM_STR);
        $req->bindValue(":created_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        $req->bindValue(":author", $commentaire->getAuthor(), PDO::PARAM_STR);

        $req->execute();
    }
    public function delete(int $id): void
    {
        $req = $this->db->prepare("DELETE FROM `commentaire` WHERE id = :id");
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();
    }


    public function get(int $id): Commentaire
    {
        $req = $this->db->prepare("SELECT * FROM `commentaire` WHERE id = :id");
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();

        $donnees = $req->fetch();
        $commentaire = new Commentaire($donnees);
        return $commentaire;
    }

    public function getAll(): array
    {
        $commentaires = [];
        $req = $this->db->query("SELECT * FROM `commentaire` ORDER BY created_at desc");
        $req->execute();

        $donnees = $req->fetchAll();
        foreach ($donnees as $donnee) {
            $commentaires[] = new Commentaire($donnee);
        }

        return $commentaires;
    }
}

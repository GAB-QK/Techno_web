<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/acceuil.css" type="text/css">
    <link rel="stylesheet" href="./styles/nav.css" type="text/css">
    <link rel="stylesheet" href="./styles/read.css" type="text/css">
    <link rel="stylesheet" href="./styles/w3.css" type="text/css">
    <title>read</title>
</head>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="javascript:;" onclick="history.back()" class="nav-link"><img class="icon" src="./images/arrow.svg" alt="flèche retour"> </a></li>
                <li><a href="./index.php" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="./top_article.php" class="nav-link px-2 text-white"> Top 3 </a></li>
                <li><a href="./readAll.php" class="nav-link px-2 text-white">Tous les articles</a></li>
                <li><a href="./create.php" class="nav-link px-2 text-white">Crée un article</a></li>
            </ul>

        </div>
    </div>
</header>

<body>
    <?php
    function loadClass($class)
    {
        if (str_contains($class, "Manager")) {
            require "./controllers/$class.php";
        } else {
            require "./models/$class.php";
        }
    }

    spl_autoload_register("loadClass");



    $manager = new ArticleManager();
    $commentairetocreate = new CommentaireManager();
    if ($_GET) {
        $article = $manager->get($_GET['id']);
    }

    if ($_POST) {

        $donnees = [
            "id_article" => $_GET["id"],
            "content" => $_POST["content"],
            "author" => $_POST["author"]
        ];

        $commentairetocreate->add(new Commentaire($donnees));
    }

    $affichagecommentaires = $commentairetocreate->getAll();

    ?>
    <div>
        <header class="w3-container w3-white">
            <div class="position_1">
                <h3><?= $article->getTitle(); ?></h3>
                <h5>De, <?= $article->getAuthor(); ?></h5>
                <h6>dernière modification: <?= $article->getCreated_at(); ?></h6>
            </div>
        </header>
        <div class="w3-container">
            <hr>
            <div class="d-flex">
                <img src="<?= $article->getLien_image(); ?>" alt="..." class="w3-left w3-square image-size">
                <div class="text-properties">
                    <p><?= $article->getContent(); ?></p>
                </div>
            </div>

        </div>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example" style="margin-left : 3%; margin-top : 1%;">
            <a class="btn btn-danger" onclick="deleteArticle('<?= $article->getId() ?>')">
                <img src="./images/cross.png" alt="..." style=" max-width: 50px;" />
            </a>
            <a href="./update.php?id=<?= $article->getId() ?>" class="btn btn-warning">
                <img src="./images/pen.png" alt="..." style=" max-width: 50px;" />
            </a>
        </div>
    </div>

    <form method="POST">
        <div class="p-5">
            <div>
                <h5 class="text-color-white">Auteur :</h5>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="author" id="author"></textarea>
                    <label for="floatingTextarea">Auteur</label>
                </div>
            </div>
            <div>
                <h5 class="text-color-white">Commentaire :</h5>
                <div class="form-floating">
                    <textarea class="form-control" style="height : 120px;" placeholder="Leave a comment here" name="content" id="content"></textarea>
                    <label for="floatingTextarea">commentaire</label>
                </div>
            </div>
            <div class="mt-2 mb-2">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
    </form>

    <?php
    foreach ($affichagecommentaires as $affichagecommentaire) {
        if ($affichagecommentaire->getId_article() == $article->getId()) { ?>

            <div style="background-color : rgb(250,250,250)" class="m-5 p-4">
                <p style="font-size : 25px" class="mb-2"> <?= $affichagecommentaire->getAuthor(); ?></p>
                <p> <?= $affichagecommentaire->getContent(); ?></p>
                <p class="pt-3 mb-0"> <?= $affichagecommentaire->getCreated_at(); ?></p>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-danger" onclick="deleteComment('<?= $affichagecommentaire->getId() ?>')">
                        <img src="./images/cross.png" alt="..." style=" max-width: 20px;" />
                    </a>
                </div>
            </div>
    <?php }
    } ?>

    <script>
        function deleteArticle(id) {
            if (confirm("confirmer la suppression")) {
                window.location.href = "./delete.php?id=" + id
            }
        }
    </script>

    <script>
        function deleteComment(objet) {
            if (confirm("confirmer la suppression")) {
                window.location.href = "./deleteComment.php?id=" + objet
            }
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="./javascript/acceuil.js"></script>
    <script src="./javascript/nav.js"></script>
</body>

</html>
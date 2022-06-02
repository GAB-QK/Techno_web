<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/acceuil.css" type="text/css">
    <link rel="stylesheet" href="./styles/read.css" type="text/css">
    <link rel="stylesheet" href="./styles/nav.css" type="text/css">
    <title>modification d'articles</title>
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
                <li><a href="./index.php" class="nav-link px-2 text-secondary">
                        <h1 class="ml11">
                            <span class="text-wrapper">
                                <span class="line line1"></span>
                                <span class="letters">Modification</span>
                            </span>
                        </h1>
                    </a></li>
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

    if ($_GET) {
        $article = $manager->get($_GET['id']);
    }

    if ($_POST) {

        $donnees = [
            "id" => $_GET["id"],
            "content" => $_POST["content"],
            "author" => $_POST["author"],
            "title" => $_POST["title"],
            "lien_image" => $_POST["lien_image"]    
        ];

        $manager->update(new Article($donnees));
        header("Location: ./read.php?id={$_GET["id"]}");               
        exit();
    } ?>
    <div>
        <div>
            <img src="https://prepeersstorage.blob.core.windows.net/academic/342_logo.png?sp=rl&st=2021-12-31T17:23:57Z&se=2022-12-31T17:23:00Z&sv=2020-08-04&sr=c&sig=SDDHph6sgvvHddvrug4O1jhZy3LU1U78BVN%2BDJjRB5M%3D" alt="Erreur" style="max-height: 100px; margin-left : 70px;">
        </div>
        <form method="POST" class="container mt-2">
            <label>Auteur</label>
            <input type="text" name="author" id="author" class="form-control mb-3" placeholder="Auteur de l'article" value="<?= $article->getAuthor(); ?>">
            <label>Titre</label>
            <input type="text" name="title" id="title" class="form-control mb-3" placeholder="titre de l'article" value="<?= $article->getTitle(); ?>">
            <label>Contenu</label>
            <textarea name="content" id="content" class="form-control mb-3" placeholder="Le contenu de l'article"><?= $article->getContent(); ?></textarea>
            <label>URL de l'image</label>
            <input type="url" name="lien_image" id="lien_image" class="form-control" placeholder="lien de l'image" value="<?= $article->getLien_image(); ?>">
            <input type="submit" value="Modifier ! " class=" mt-3 btn btn-primary">
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="./javascript/acceuil.js"></script>
    <script src="./javascript/nav.js"></script>

</body>

</html>
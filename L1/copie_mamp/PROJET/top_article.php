<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/acceuil.css" type="text/css">
    <link rel="stylesheet" href="./styles/nav.css" type="text/css">

    <title>Home</title>
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
                <li><a href="./index.php" class="nav-link px-2 text-white"> Home </a></li>
                <li><a href="./top_article.php" class="nav-link px-2 text-secondary">
                        <h1 class="ml11">
                            <span class="text-wrapper">
                                <span class="line line1"></span>
                                <span class="letters">Top 3</span>
                            </span>
                        </h1>
                    </a>
                </li>
                <li><a href="./readAll.php" class="nav-link px-2 text-white"> Tous les articles </a></li>
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
    $articles = $manager->getAll();
    $count = 0;
    ?>
    <div class="d-flex flex-wrap justify-content-center ">
        <?php
        foreach ($articles as $article) {
            $count++;
            if ($count > 3) {
                break;
            }
        ?>
            <div>
                <div class="card m-5" style="width: 15rem;">
                    <img src="<?= $article->getLien_image(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $article->getTitle() ?></h5>
                        <p class="card-text"><?php
                                                echo substr($article->getContent(), 0, 50);
                                                ?>...</p>
                        <p class="card-text"> <?= $article->getCreated_at() ?></p>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example" style="padding-left : 20px">
                            <a class="btn btn-danger" onclick="deleteArticle('<?= $article->getId() ?>')">
                                <img src="./images/cross.png" alt="..." style=" max-width: 30px;" />
                            </a>
                            <a href="./update.php?id=<?= $article->getId() ?>" class="btn btn-warning">
                                <img src="./images/pen.png" alt="..." style=" max-width: 35px;" />
                            </a>
                            <a href="./read.php?id=<?= $article->getId() ?>" class="btn btn-success">
                                <img src="./images/glasses.png" alt="..." style=" max-width: 30px;" /> </a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>

    <script>
        function deleteArticle(id) {
            if (confirm("confirmer la suppression")) {
                window.location.href = "./delete.php?id=" + id
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="./javascript/acceuil.js"></script>
    <script src="./javascript/nav.js"></script>
</body>

</html>
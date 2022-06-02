<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/acceuil.css" type="text/css">
  <link rel="stylesheet" href="./styles/nav.css" type="text/css">
  <link rel="stylesheet" href="./styles/eye.css" type="text/css">

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
        <li><a href="./index.php" class="nav-link px-2 text-secondary">
            <h1 class="ml11">
              <span class="text-wrapper">
                <span class="line line1"></span>
                <span class="letters">Home</span>
              </span>
            </h1>
          </a></li>
        <li><a href="./top_article.php" class="nav-link px-2 text-white"> Top 3 </a></li>
        <li><a href="./readAll.php" class="nav-link px-2 text-white"> Tous les articles </a></li>
        <li><a href="./create.php" class="nav-link px-2 text-white">Crée un article</a></li>
      </ul>

    </div>
  </div>
</header>

<body>

  <h1 class="ml3 d-flex justify-content-center">Hexa News</h1>

  <div class="d-flex justify-content-center" style="margin-left : 18px;">
    <div class="snippet" data-title=".dot-stretching">
      <div class="stage">
        <div class="dot-stretching"></div>
      </div>
    </div>
  </div>


<footer>
  <div id="eye">
    <div id="eyeBall"></div>
  </div>
</footer>




  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="./javascript/acceuil.js"></script>
  <script src="./javascript/nav.js"></script>
  <script src="./javascript/eye.js"></script>

</body>


</html>
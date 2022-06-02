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

$manager = new CommentaireManager();
if ($_GET) {
    $objet = $manager->get($_GET['id']);
    $id = $objet->getId();
    $id_article = $objet->getId_article();
    $manager->delete($id);
}


header("Location: ./read.php?id={$id_article}");
exit();

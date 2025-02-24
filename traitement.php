<?php
include("header.php"); 
include("bdd.php");
include("fonctions.php");

$title = htmlspecialchars($_POST["title"]) ?? NULL;
$author = htmlspecialchars($_POST["author"]) ?? NULL;
$img_url = htmlspecialchars($_POST["img_url"]) ?? NULL;
$description = htmlspecialchars($_POST["description"]) ?? NULL;

if($title == NULL || $author == NULL || !validateImgURL($img_url) || strlen($description) < 3){
    echo "<br>Une erreur est survenue<br>";
    echo"<a href='./ajouter.php'><button>Retourner au formulaire</button></a>";
}
else{
    echo "<br>Les données envoyées sont valides.";
}
include("footer.php");

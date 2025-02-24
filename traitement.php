<?php
include("header.php"); 
include("fonctions.php");

$title = htmlspecialchars($_POST["title"]) ?? NULL;
$author = htmlspecialchars($_POST["author"]) ?? NULL;
$img_url = htmlspecialchars($_POST["img_url"]) ?? NULL;
$description = htmlspecialchars($_POST["description"]) ?? NULL;

if($title == NULL || $author == NULL || !validateImgURL($img_url) || strlen($description) < 3)
    echo "<div class='server_response'>Une erreur est survenue.<br>";
else{
    insertNewPainting($title, $author, $description, $img_url);
    echo "<div class='server_response'>Les données ont été ajoutées.<br>";
}

echo"<a href='./ajouter.php'><button>Retourner au formulaire</button></a></div>";
include("footer.php");

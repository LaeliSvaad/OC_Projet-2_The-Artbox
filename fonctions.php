<?php 
include("bdd.php");

function validateImgURL($url) {
    $pattern = '/^https?:\/\/.*\.(jpg|jpeg|png|gif|bmp|webp)$/i';
    return preg_match($pattern, $url);
}

function insertNewPainting($title, $author, $description, $img_url){
    $db = db_connexion();
    $req = 'INSERT INTO oeuvres (title, author, description, img_url) VALUES (:title, :author, :description, :img_url)';
    $stmt = $db->prepare($req);
    $stmt->execute(['title' => $title,
                    'author' => $author,
                    'description' => $description,
                    'img_url' => $img_url]);
}

function getPainting($id){
    $db = db_connexion();
    $req = 'SELECT title, author, description, img_url FROM oeuvres WHERE ID = :id';
    $stmt = $db->prepare($req);
    $stmt->execute(['id' => $id]);
    return $stmt->fetchAll();
}
?>

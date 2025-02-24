<?php
include("bdd.php");

/****CONTROLLER****/
/*error handling variable*/
$existing_painting = false;
/*if "id" does not exist in the url, $id takes false as its value*/
$id = $_GET["id"] ?? NULL;
if($id !== NULL){
    $db = db_connexion();
    $req = 'SELECT title, author, description, img_url FROM oeuvres WHERE ID = :id';
    $stmt = $db->prepare($req);
    $stmt->execute(['id' => $id]);
    $painting = $stmt->fetchAll();
    if(count($painting) != 0)
        $existing_painting = true;
}
if (!$existing_painting): header('Location: index.php'); 
?>

<?php /****VUE****/
else: include("header.php"); ?>
<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?= $painting[0]["img_url"] ?>" alt="<?= $painting[0]["title"] ?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?= $painting[0]["title"] ?></h1>
        <p class="description"><?= $painting[0]["author"] ?></p>
        <p class="description-complete"><?= $painting[0]["description"] ?></p>
    </div>
</article> 
<?php endif; ?>

<?php include("footer.php"); ?>

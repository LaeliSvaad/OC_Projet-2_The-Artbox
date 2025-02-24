<?php
include("bdd.php");

/*error handling variable*/
$existing_painting = false;
/*if "id" does not exist in the url, $id takes false as its value*/
$id = $_GET["id"] ?? false;
    
if($id !== false){
    $db = db_connexion();
    $req = 'SELECT title, author, description, img_url FROM oeuvres WHERE ID = :id';
    $stmt = $db->prepare($req);
    $stmt->execute(['id' => $id]);
    $painting = $stmt->fetchAll();
    if(count($painting) != 0)
        $existing_painting = true;
}
?>

<?php include("header.php"); ?>

<?php if ($existing_painting): ?>
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
<?php else: header('Location: index.php');?>
    
<?php endif; ?>

<?php include("footer.php"); ?>

<?php 
    include("header.php");
    include("bdd.php");

    $db = db_connexion();
    $req = 'SELECT * FROM oeuvres';
    $stmt = $db->query($req);
    $oeuvres = $stmt->fetchAll();
?>

<div id="liste-oeuvres">
<?php foreach ($oeuvres as $oeuvre):  ?>             
    <article class="oeuvre">
        <a href="oeuvre.php?id=<?= $oeuvre["ID"] ?>">
            <img src="img/<?= $oeuvre['img_url'] ?>" alt="<?= $oeuvre['title'] ?>">
            <h2><?= $oeuvre['title'] ?></h2>
            <p class="description"><?= $oeuvre['author'] ?></p>
        </a>
    </article>
<?php endforeach; ?>
</div>

<?php  include("footer.php"); ?>
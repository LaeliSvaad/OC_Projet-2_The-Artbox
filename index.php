<?php 
    include("header.php");
    include("bdd.php");

    $db = db_connexion();
    $req = 'SELECT * FROM oeuvres';
    $stmt = $db->prepare($req);
    $stmt->execute();
    $paintings = $stmt->fetchAll();
?>

<div id="liste-oeuvres">
<?php foreach ($paintings as $painting):  ?>             
    <article class="oeuvre">
        <a href="oeuvre.php?id=<?= $painting["ID"] ?>">
            <img src="img/<?= $painting['img_url'] ?>" alt="<?= $painting['title'] ?>">
            <h2><?= $painting['title'] ?></h2>
            <p class="description"><?= $painting['author'] ?></p>
        </a>
    </article>
<?php endforeach; ?>
</div>

<?php  include("footer.php"); ?>
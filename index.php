<?php 
    include("header.php");
    $PDO = include("bdd.php");

    $req = 'SELECT * FROM oeuvres';
    $stmt = $PDO->query($req);
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
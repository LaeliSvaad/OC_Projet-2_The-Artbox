<?php 
    include("header.php");
    $oeuvres = include("oeuvres.php"); 
?>

    <div id="liste-oeuvres">
    <?php foreach ($oeuvres as $oeuvre):  ?>             
        <article class="oeuvre">
            <a href="oeuvre.php?id=<?= $oeuvre["id"] ?>">
                <img src="img/<?= $oeuvre['img_src'] ?>" alt="<?= $oeuvre['title'] ?>">
                <h2><?= $oeuvre['title'] ?></h2>
                <p class="description"><?= $oeuvre['author'] ?></p>
            </a>
        </article>
    <?php endforeach; ?>
    </div>

<?php  include("footer.php"); ?>
<?php 
    include("header.php");
    include("fonctions.php");

    $paintings = getPaintings();
?>

<div id="liste-oeuvres">
<?php foreach ($paintings as $painting):  ?>             
    <article class="oeuvre">
        <a href="oeuvre.php?id=<?= $painting["ID"] ?>">
            <img src="<?= $painting['img_url'] ?>" alt="<?= $painting['title'] ?>">
            <h2><?= $painting['title'] ?></h2>
            <p class="description"><?= $painting['author'] ?></p>
        </a>
    </article>
<?php endforeach; ?>
</div>

<?php  include("footer.php"); ?>
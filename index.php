<?php 
    require_once("header.php");
    require_once("oeuvres.php"); 
    if(isset($_GET["page"]) && !empty($_GET["page"])){ ?>
        <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="img/<?= $oeuvres[$_GET["page"]]["img_src"] ?>" 
                 alt="<?= $oeuvres[$_GET["page"]]["title"] ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?= $oeuvres[$_GET["page"]]["title"] ?></h1>
            <p class="description"><?= $oeuvres[$_GET["page"]]["author"] ?></p>
            <p class="description-complete">
            <?= $oeuvres[$_GET["page"]]["description"] ?>
            </p>
        </div>
    </article>
<?php 
    } 
    else { 
         $i = 0; 
?>
        <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $oeuvre) {  
                $i++; 
            ?>
                <article class="oeuvre">
                    <a href="index.php?page=oeuvre-<?= $i ?>">
                        <img src="img/<?= $oeuvre['img_src'] ?>" alt="<?= $oeuvre['title'] ?>">
                        <h2><?= $oeuvre['title'] ?></h2>
                        <p class="description"><?= $oeuvre['author'] ?></p>
                    </a>
                </article>
            <?php ; } ?>
        </div>
<?php } 
    require_once("footer.php"); ?>
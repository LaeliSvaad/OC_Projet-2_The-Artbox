<?php
include("header.php");

if(isset($_GET["id"]) && !empty($_GET["id"])){ 
    $id = $_GET["id"];
    $o = null;
    include("oeuvres.php");

    foreach($oeuvres as $oeuvre)
    {
        if($oeuvre["id"] == $id)
        {
            $o = $oeuvre;
        }
    }
?>
<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="img/<?= $o["img_src"] ?>" alt="<?= $o["title"] ?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?= $o["title"] ?></h1>
        <p class="description"><?= $o["author"] ?></p>
        <p class="description-complete"><?= $o["description"] ?></p>
    </div>
</article>
<?php 
} 

include("footer.php");
?>

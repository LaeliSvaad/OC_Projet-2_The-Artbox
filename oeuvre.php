<?php
//Controller
    $oeuvres = include("oeuvres.php");

    //si "id" n'existe pas dans l'url, $id prend 0 pour valeur
    $id = $_GET["id"] ?? 0;

    //on initie cette variable pour gérer les erreurs par la suite
    $oeuvre_existante= false;

    //L'oeuvre est-elle dans le tableau? 
    //Si oui, on la récupère dans $oeuvre et on passe $oeuvre_existante à true
    foreach($oeuvres as $oeuvre)
    {
        if($oeuvre["id"] == $id)
        {
            $oeuvre_existante = true;
            break;
        }
    }
?>

<!-- Vue -->
    <?php include("header.php"); ?>

    <?php if ($oeuvre_existante): ?>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="img/<?= $oeuvre["img_src"] ?>" alt="<?= $oeuvre["title"] ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?= $oeuvre["title"] ?></h1>
            <p class="description"><?= $oeuvre["author"] ?></p>
            <p class="description-complete"><?= $oeuvre["description"] ?></p>
        </div>
    </article>
    <?php else: ?>
        <p>Erreur: cette oeuvre n'existe pas.</p>
    <?php endif; ?>

    <?php include("footer.php"); ?>

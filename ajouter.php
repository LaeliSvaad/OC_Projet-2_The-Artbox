<?php include("header.php"); ?>

<p><b>Ajouter une oeuvre au catalogue:</b></p>
<form action="traitement.php" method="POST">
    <div class="form-block">
        <div class="form-row">
            <label for="input-title">Titre de l'oeuvre: </label>
            <input type="text" name="title" id="input-title" required/>
        </div>
        <div class="form-row">
            <label for="input-author">Auteur de l'oeuvre: </label>
            <input type="text" name="author" id="input-author" required/>
        </div>
        <div class="form-row">
            <label for="input-img-url">URL de l'image de l'oeuvre: </label>
            <input type="text" pattern="https?:\/\/.*\.(jpg|jpeg|png|gif|bmp|webp)$" title="une URL d'image valide se termine par .jpg, .jpeg, .png, .gif, .bmp ou .webp" name="img_url" id="input-img-url" required/>
        </div>
        <div class="form-row">
            <label for="input-description">Description de l'oeuvre: </label>
            <textarea name="description" minlength="3" id="input-description" required></textarea>
        </div>
        <div class="form-row">
            <input type="submit" value="Envoyer" />
        </div>
    </div>
</form>

<?php include("footer.php"); ?>
<?php include_once 'header.php'; ?>
<h1>Formulaire de contact</h1>

<form method="post" action=""> <!-- pense a indiquer le fichier-->
    <?php if (isset($_GET['valid']) && $_GET['valid'] === '1') { ?>
        <div class="alert alert-success">
            Votre demande de contact a bien été envoyée.
        </div>
    <?php } ?>
    <div class="row">
        <div class="col">
            <input type="text" name="nom" placeholder="nom" value="<?php if (isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
            <?php if (isset($errors['nom'])) {
                echo $errors['nom'];
            } ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <input type="text" name="prenom" placeholder="prenom" value="<?php if (isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>">
            <?php if (isset($errors['prenom'])) {
                echo $errors['prenom'];
            } ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="email" name="mail" placeholder="mail" value="<?php if (isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
            <?php if (isset($errors['mail'])) {
                echo $errors['mail'];
            } ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="tel" name="phone" placeholder="phone" value="<?php if (isset($_POST['phone'])) { echo $_POST['phone']; } ?>">
            <?php if (isset($errors['phone'])) {
                echo $errors['phone'];
            } ?>
        </div>
    </div>
    <button type="submit">Soumettre</button>
</form>

<?php include_once 'footer.php';
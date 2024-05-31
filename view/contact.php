<?php include_once 'header.php'; ?>

<div class="container">
    <h1>Formulaire de contact</h1>

    <form method="post" action="/contact"> <!-- pense a indiquer le fichier-->
        <?php if (isset($_GET['valid']) && $_GET['valid'] === '1') { ?>
            <div class="alert alert-success">
                Votre demande de contact a bien été envoyée.
            </div>
        <?php } ?>
        <div class="row">
            <div class="col mb-3 has-validation">
                <input class="form-control<?php if (isset($errors['nom'])) { ?> is-invalid<?php } ?>" type="text" name="nom" placeholder="nom" value="<?php if (isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
                <?php if (isset($errors['nom'])) { ?>
                    <div class="invalid-feedback">
                        <?= $errors['nom'] ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col mb-3 has-validation">
                <input class="form-control<?php if (isset($errors['prenom'])) { ?> is-invalid<?php } ?>" type="text" name="prenom" placeholder="prenom" value="<?php if (isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>">
                <?php if (isset($errors['prenom'])) {
                    echo $errors['prenom'];
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3 has-validation">
                <input class="form-control<?php if (isset($errors['mail'])) { ?> is-invalid<?php } ?>" type="email" name="mail" placeholder="mail" value="<?php if (isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
                <?php if (isset($errors['mail'])) {
                    echo $errors['mail'];
                } ?>
            </div>
            <div class="col mb-3 has-validation">
                <input class="form-control<?php if (isset($errors['phone'])) { ?> is-invalid<?php } ?>" type="tel" name="phone" placeholder="phone" value="<?php if (isset($_POST['phone'])) { echo $_POST['phone']; } ?>">
                <?php if (isset($errors['phone'])) {
                    echo $errors['phone'];
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3 has-validation">
                <textarea class="form-control<?php if (isset($errors['message'])) { ?> is-invalid<?php } ?>" name="message" placeholder="Ecrivez votre message"><?php if (isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
                <?php if (isset($errors['message'])) {
                    echo $errors['message'];
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                <button class="btn btn-primary" type="submit">Soumettre</button>
            </div>
        </div>
    </form>
</div>

<?php include_once 'footer.php';
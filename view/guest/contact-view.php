<?php require_once('../../view/guest/partials/_header.php'); ?>


<h1>Contact</h1>

<form method="post">

    <label for="name">Nom</label>
    <input type="text" name="name" id="name"/>

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom"/>

    <label for="message">Message</label>
    <input type="text" name="message" id="message"/>

    <input type="submit">

</form>

<?php if ($isMessageSent) {?>

    <?php if ($isFormValid){?>

        <p>Formulaire envoyé</p>

    <?php } else {?>

        <p>Attention, les données renseignées ne sont pas correctes</p>

    <?php }?>

<?php }?>



<?php require_once('../../view/guest/partials/_footer.php'); ?>

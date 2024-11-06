<?php require_once('../../view/guest/partials/_header.php'); ?>
<main>

    <?php if($isFormSubmitted && $hasFormError){ ?>

        <p>Utilisateur non reconnu. Veuillez créér un compte</p>

    <?php }?>


    <form method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"/>

        <label for="password">Password</label>
        <input type="password" name="password" id="password"/>

        <input type="submit"/>


    </form>
</main>




<?php require_once('../../view/guest/partials/_footer.php'); ?>

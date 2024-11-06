<?php require_once('../../view/admin/partials/_header.php'); ?>

<main>

    <h1> Créer un article</h1>


    <form method="post">

        <label for="title">Titre</label>
        <input type="text" name="title" id="title"/>

        <label for="content">Contenu</label>
        <input type="text" name="content" id="content"/>

        <label for="image">Image</label>
        <input type="text" name="image" id="image"/>

        <input type="submit">

    </form>

    <?php if($isArticleCreated){?>

        <?php if ($isArticleValid){?>

            <p>Article bien créé</p>

         <?php } else {?>

            <p>Merci de mieux remplir le formulaire</p>

         <?php }?>

    <?php }?>

</main>





<?php require_once('../../view/admin/partials/_footer.php'); ?>

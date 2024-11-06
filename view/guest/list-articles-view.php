<?php require_once('../../view/guest/partials/_header.php'); ?>

<main>
    <h1> Les articles de mon blog</h1>

    <article>
        <?php if(isContentTooLong($article['title'])){?>
            <h2> <?php echo shortenString($article['title']) ?></h2>
        <?php } else { ?>
            <h2> <?php echo $article['title']?></h2>

        <?php }?>

        <?php if(isContentTooLong($article['content'])){?>
            <h2> <?php echo shortenString($article['content']) ?></h2>
        <?php } else { ?>
            <h2> <?php echo $article['content']?></h2>

        <?php }?>
    </article>

</main>

<?php require_once('../../view/guest/partials/_footer.php'); ?>

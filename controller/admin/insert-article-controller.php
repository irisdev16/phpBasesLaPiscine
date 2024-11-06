<?php

require_once('../../service/authentification-service.php');

redirectNotLoggedUser();


$isArticleCreated = false;

$isArticleValid = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $isArticleCreated = true;

        if ($_POST ['title'] &&
            $_POST ['content'] &&
            $_POST ['image'] &&
            mb_strlen($_POST['title']) > 3 &&
            mb_strlen($_POST['content']) > 3 &&
            mb_strlen($_POST ['image']) > 4
        ) {

            // je créé un tableau contenant toutes mes valeurs
            // issues du formulaire
            $article = [
                "title" => $_POST['title'],
                "content" => $_POST['content'],
                "image" => $_POST['image'],
            ];

            // je récupère le chemin du fichier json
            // qui servira à stocker les données

            $path = '../../model/articles.json';

            // je convertis mon article en json
            // le JSON_PRETTY_PRINT permet un affichage en colonne dans mon fichier json
            $jsonString = json_encode($article, JSON_PRETTY_PRINT);

            // j'ouvre le fichier json, je stocke mon article
            // dedans et je ferme le fichier json
            //fp signifie file Pointer

            $fp = fopen($path, "w");
            fwrite($fp, $jsonString);
            fclose($fp);


            $isArticleValid = true;
        }

    }

require_once('../../view/admin/insert-article-view.php');
?>
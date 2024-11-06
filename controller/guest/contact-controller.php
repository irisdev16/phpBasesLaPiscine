
<?php

$isMessageSent = false;

$isFormValid = false;


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $isMessageSent = true;

        if ($_POST['name'] &&
            $_POST['prenom'] &&
            $_POST['message'] &&

            mb_strlen($_POST['name']) > 3 &&
            mb_strlen($_POST['prenom']) > 3 &&
            mb_strlen($_POST['message']) > 3
        ) {

            $isFormValid = true;

        }

    }

require_once('../../view/guest/contact-view.php');

?>



<?php


$isFormSubmitted = false;
$hasFormError = false;


if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $isFormSubmitted = true;


    if ($_POST['email'] === "iris.dettori@gmail.com" &&
        $_POST['password'] === "test"
    ) {


        session_start();

        $_SESSION['is_authenticated'] = true;

        header('Location: http://localhost:8888/php-bases/controller/admin/dashboard-controller.php');
    } else{

        $hasFormError = true;

    }

}


require_once('../../view/guest/connexion-view.php');